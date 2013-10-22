$(function() {

    // Set additional info
    $(".modal-body p").append(info);

    // Set warnings
    $(".warnings p").append(warnings);

    /**
     * Returns the week number for this date.  dowOffset is the day of week the week
     * "starts" on for your locale - it can be from 0 to 6. If dowOffset is 1 (Monday),
     * the week returned is the ISO 8601 week number.
     * @param dowOffset
     * @return int
     * @author Nick Baicoianu at MeanFreePath: http://www.meanfreepath.com
     */
    Date.prototype.getWeek = function(dowOffset) {
        dowOffset = typeof(dowOffset) == 'int' ? dowOffset : 0; //default dowOffset to zero
        var newYear = new Date(this.getFullYear(),0,1);
        var day = newYear.getDay() - dowOffset; //the day of week the year begins on
        day = (day >= 0 ? day : day + 7);
        var daynum = Math.floor((this.getTime() - newYear.getTime() -
            (this.getTimezoneOffset()-newYear.getTimezoneOffset())*60000)/86400000) + 1;
        var weeknum;
        //if the year starts before the middle of a week
        if(day < 4) {
            weeknum = Math.floor((daynum+day-1)/7) + 1;
            if(weeknum > 52) {
                var nYear = new Date(this.getFullYear() + 1,0,1);
                var nday = nYear.getDay() - dowOffset;
                nday = nday >= 0 ? nday : nday + 7;
                /*if the next year starts before the middle of
                 the week, it is week #1 of that year*/
                weeknum = nday < 4 ? 1 : 53;
            }
        }
        else {
            weeknum = Math.floor((daynum+day-1)/7);
        }
        return weeknum;
    };

    /**
     * http://diveintohtml5.info/storage.html
     * @returns boolean if true - browser support local storage.
     */
    function isLocalStorage() {
        try {
            return 'localStorage' in window && window['localStorage'] !== null;
        } catch (e) {
            return false;
        }
    }

    function Schedule() {
        this.currentGroup = this.getCurrentGroup();
        this.month = new Month();
        this.currentWeek = this.getCurrentWeek();
        this.weekToShow = this.getWeekToShow();
    }

    Schedule.prototype.fill = function() {
        this.month.fill();
    };

    Schedule.prototype.getCurrentGroup = function() {
        if (isLocalStorage()) {
            if (localStorage.getItem('currentGroup')) {
                return localStorage.getItem('currentGroup');
            }
        }
        return 1;
    }

    Schedule.prototype.saveCurrentGroup = function(value) {
        if (isLocalStorage()) {
            localStorage.setItem('currentGroup', value);
        }
    }

    Schedule.prototype.show = function() {
        this.fill();
        // Save currentGroup between sessions
        schedule.saveCurrentGroup(schedule.currentGroup);
        // Show week on page
        $('.shownWeek').html(schedule.weekToShow);
        $('.currentWeek').html(schedule.currentWeek);
        // Show button highlight
        $('a[data-group="' + this.currentGroup + '"]').addClass('btn-success');

        // Hide current week button
        $('button[data-week="' + this.weekToShow + '"]').hide();

        $('#schedule').empty().append(schedule.month.getHtml());
    };

    Schedule.prototype.getCurrentWeek = function() {
        var today = new Date();
        this.currentWeek = (today.getWeek(1) - 2 - 1) % 4 + 1;
        return this.currentWeek;
        /**
         * this.currentWeek = (today.getWeek(1) - N - 1) % 4 + 1;
         * N - Магическое число: 2 - разница между учебной и календарной неделей
         * текущая неделя - 2 учебная
         * текущая неделя - 4 календарная
         */
    };

    Schedule.prototype.getWeekToShow = function() {
        this.weekToShow = new Date().getDay() > 4 ? this.currentWeek % 4 + 1 : this.currentWeek;
        return this.weekToShow;
    };

    function Month() {
        this.weeks = [];
    }

    Month.prototype.addWeek = function(week, position) {
        this.weeks[position] = week;
        return this;
    };

    Month.prototype.getHtml = function() {
        var week = this.weeks[schedule.weekToShow];
        return week.getHtml();
    };

    Month.prototype.fill = function() {
        for (var iterWeek = 1; iterWeek <= 4; iterWeek++) {
            var week = new Week();
            week.number = iterWeek;
            week.fill();
            this.addWeek(week, iterWeek);
        }
    };

    function Week() {
        this.days = [];
        this.number = "";
    }

    Week.prototype.addDay = function(day, position) {
        this.days[position] = day;
        return this;
    };

    Week.prototype.fill = function() {
        for (var iterDay = 0; iterDay < data.length; iterDay++) {
            var day = new Day();
            day.fill(data[iterDay]);
            this.addDay(day, day.number);
        }
    };

    Week.prototype.getHtml = function() {
        var result = "";
        for (var iterDay = 0; iterDay < this.days.length; iterDay++) {
            result += this.days[iterDay].getHtml();
        }
        return result;
    }


    function Day() {
        this.lessons = [];
        this.number = "";
    }

    Day.prototype.fill = function(day) {
        this.number = day.number;
        for (var iterLesson in day.lessons) {
            var lesson = new Lesson();
            lesson.fill(day.lessons[iterLesson]);
            if (lesson.hasWeek(schedule.weekToShow) && lesson.hasGroup(schedule.currentGroup)) {
                this.lessons[lesson.time] = lesson;
            }
        }
    };

    Day.prototype.getHtml = function() {
        return '<div class="day col-lg-4">'
            + '<h4>' + this.getCurrentDayFromNumber(this.number) + '</h4>'
            +  this.getLessonsHtml()
            + '</div>';
    };

    Day.prototype.getLessonsHtml = function() {
        var result = "";
        for(var lessonIter in this.lessons) {
            result += this.lessons[lessonIter].getHtml();
        }
        return result;
    };

    Day.prototype.getCurrentDayFromNumber = function(number) {
        switch (number) {
            case 0:
                return "Monday";
            case 1:
                return "Tuesday";
            case 2:
                return "Wednesday";
            case 3:
                return "Thursday";
            case 4:
                return "Friday";
            case 5:
                return "Saturday";
            case 6:
                return "Sunday";
            default:
                return "";
        }
    };

    function Lesson() {
        this.time = "";
        this.name = "";
        this.type = "";
        this.info = "";
        this.weeks = [];
        this.group = [];
    }

    Lesson.prototype.fillLessonWeeks = function(lesson) {
        for (var weekIter in lesson.weeks) {
            this.weeks.push(lesson.weeks[weekIter]);
        }
        return this;
    };

    Lesson.prototype.fillLessonGroups = function(lesson) {
        for (var groupsIter in lesson.groups) {
            this.group.push(lesson.groups[groupsIter]);
        }
        return this;
    };

    Lesson.prototype.fill = function(lesson) {
        this.time = lesson.time;
        this.name = lesson.name;
        this.type = lesson.type;
        this.info = lesson.info;
        this.fillLessonWeeks(lesson);
        this.fillLessonGroups(lesson);
        return this;
    };

    Lesson.prototype.getHtml = function() {
        return '<div class="' + this.type + ' ' + 'p' + this.time + '">'
            + '<p class="time">' + this.getTimeFromNumber(this.time) + '</p>'
            + '<p class="name">' + this.name + '</p>'
            + '<p class="description">' + this.info + '</p>'
            + '</div>';
    };

    /**
     * Converts number to it's time equivalent for BSUIR schedule.
     * @param number number of lesson.
     * @returns {string} time in 24h format.
     */
    Lesson.prototype.getTimeFromNumber = function(number) {
        switch (number) {
            case 1:
                return "8:00-9:35";
            case 2:
                return "9:45-11:20";
            case 3:
                return "11:40-13:15";
            case 4:
                return "13:25-15:00";
            case 5:
                return "15:20-16:55";
            case 6:
                return "17:05-18:40";
            case 7:
                return "18:45-20:20";
            case 8:
                return "20:25-22:00";
            default:
                return "";
        }
    };

    Lesson.prototype.hasWeek = function(weekNumber) {
        if (this.weeks.length == 0) {
            return true;
        } else {
            for (var weekIter in this.weeks) {
                if (this.weeks[weekIter] == weekNumber) {
                    return true;
                }
            }
        }
        return false;
    };

    Lesson.prototype.hasGroup = function(groupNumber) {
        if (this.group.length == 0) {
            return true;
        } else {
            for (var groupIter in this.group) {
                if (this.group[groupIter] == groupNumber) {
                    return true;
                }
            }
        }
        return false;
    };

    /**
     * Common definitions ended.
     * Logic starts.
     */

    var schedule = new Schedule();
    schedule.show();

    $('button[data-week]').on('click', function() {
        $(this).siblings('button').show().end().hide();
        schedule.weekToShow = $(this).data('week');
        schedule.show();
    });

    $('a[data-group]').on('click', function() {
        schedule.currentGroup = $(this).data('group');
        var $gr1 = $('a[data-group="1"]')
           ,$gr2 = $('a[data-group="2"]');
        switch (schedule.currentGroup)  {
            case 1:
                $gr1.addClass("btn-success");
                $gr2.removeClass("btn-success");
                break;
            case 2:
                $gr1.removeClass("btn-success");
                $gr2.addClass("btn-success");
                break;
        }
        schedule.show();
    });


});