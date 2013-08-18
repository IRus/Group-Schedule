<?php

// p1 8:00-9:35
// p2 9:45-11:20
// p3 11:40-13:15
// p4 13:25-15:00
// p5 15:20-16:55
// p6 17:05-18:40
// p7 18:45-20:20
// p8 20:25-22:00

// lection laba total practick voenka

$monday = '
			<div class="practick p5 n1 n3">
				<p class="time">15:20-16:55</p>
				<p class="name">ЭПр</p>
				<p class="description">пз	504-2	Слюсарь Т.Л.</p>
			</div>

			<div class="practick p5 n2 n4">
				<p class="time">15:20-16:55</p>
				<p class="name">ФАФиОСвЦРС</p>
				<p class="description">пз	333-1	Чердынцев В.А.</p>
			</div>

			<div class="lection p6">
				<p class="time">17:05-18:40</p>
				<p class="name">ЭПр</p>
				<p class="description">лк	207-3	Носенко А.А.</p>
			</div>

			<div class="lection p7">
				<p class="time">18:45-20:20</p>
				<p class="name">МЦРиЭМС РЭС</p>
				<p class="description">лк	347-1	Горбачев К.Л.</p>
			</div>

			<div class="practick p8 n1 n3">
				<p class="time">20:25-22:00</p>
				<p class="name">МЦРиЭМС РЭС</p>
				<p class="description">пз	347-1	Горбачев К.Л.</p>
			</div>
';

$tuesday = '
			<div class="laba p4 n1 gr1">
				<p class="time">13:25-15:00</p>
				<p class="name">ЭПр</p>
				<p class="description">лр	309-5	Карпицкая С.С.</p>
			</div>

			<div class="laba p4 n3 gr2">
				<p class="time">13:25-15:00</p>
				<p class="name">ЭПр</p>
				<p class="description">лр	309-5	Карпицкая С.С.</p>
			</div>

			<div class="laba total p4 n4">
				<p class="time">13:25-15:00</p>
				<p class="name">ФАФиОСвЦРС</p>
				<p class="description">лр	333-1	Чердынцев В.А.</p>
			</div>

			<div class="laba total p4 n2">
				<p class="time">13:25-15:00</p>
				<p class="name">ЭПр</p>
				<p class="description">лр	209-5	Карпицкая С.С.</p>
			</div>

			<div class="practick p5">
				<p class="time">15:20-16:55</p>
				<p class="name">ФК-ЗОЖ СПИДиН</p>
				<p class="description"></p>
			</div>

			<div class="lection p6">
				<p class="time">17:05-18:40</p>
				<p class="name">ЗНиОотЧС.РБ</p>
				<p class="description">лк	202-3	Прудник А.М.</p>
			</div>

			<div class="laba p7 n1 gr1">
				<p class="time">18:45-20:20</p>
				<p class="name">ФАФиОСвЦРС</p>
				<p class="description">лр	333-1	Чердынцев В.А.</p>
			</div>

			<div class="laba p7 n1 gr2">
				<p class="time">18:45-20:20</p>
				<p class="name">АУвСЦР</p>
				<p class="description">лр	337а-1	Ганкевич С.А.</p>
			</div>

			<div class="laba p7 n3 gr1">
				<p class="time">18:45-20:20</p>
				<p class="name">АУвСЦР</p>
				<p class="description">лр	337а-1	Ганкевич С.А.</p>
			</div>

			<div class="laba p7 n3 gr2">
				<p class="time">18:45-20:20</p>
				<p class="name">ФАФиОСвЦРС</p>
				<p class="description">лр	333-1	Чердынцев В.А.</p>
			</div>

			<div class="practick p7 n2 n4">
				<p class="time">18:45-20:20</p>
				<p class="name">СПвУЦРС</p>
				<p class="description">пз	339-1	Казека А.А.</p>
			</div>

			<div class="practick p8 n4">
				<p class="time">20:25-22:00</p>
				<p class="name">ОИБГ</p>
				<p class="description">пз	509-2	Мякинькая А.В.</p>
			</div>

			<div class="laba p8 n3 gr1">
				<p class="time">20:25-22:00</p>
				<p class="name">АУвСЦР</p>
				<p class="description">лр	337а-1	Ганкевич С.А.</p>
			</div>

			<div class="laba p8 n1 gr2">
				<p class="time">20:25-22:00</p>
				<p class="name">АУвСЦР</p>
				<p class="description">лр	337а-1	Ганкевич С.А.</p>
			</div>
';

$wednesday = '
			<div class="lection p5">
				<p class="time">15:20-16:55</p>
				<p class="name">УПСвЦРС</p>
				<p class="description">лк	347-1	Горбачев К.Л.</p>
			</div>

			<div class="lection p6">
				<p class="time">17:05-18:40</p>
				<p class="name">ФАФиОСвЦРС</p>
				<p class="description">лк	337-1	Чердынцев В.А.</p>
			</div>

			<div class="practick p7 n1 n3">
				<p class="time">18:45-20:20</p>
				<p class="name">ЗНиОотЧС.РБ</p>
				<p class="description">пз	603-2	Камлач П.В.</p>
			</div>

			<div class="laba total p7 n2">
				<p class="time">18:45-20:20</p>
				<p class="name">ЗНиОотЧС.РБ</p>
				<p class="description">лр	603-2	Камлач П.В.</p>
			</div>

			<div class="practick p7 n4">
				<p class="time">18:45-20:20</p>
				<p class="name">ЗНиОотЧС.РБ</p>
				<p class="description">пз	603-2	Камлач П.В.</p>
			</div>

			<div class="laba p8 n1 gr1">
				<p class="time">20:25-22:00</p>
				<p class="name">ЗНиОотЧС.РБ</p>
				<p class="description">лр	605-2	Камлач П.В.</p>
			</div>

			<div class="laba p8 n3 gr1">
				<p class="time">20:25-22:00</p>
				<p class="name">УПСвЦРС</p>
				<p class="description">лр	347-1	Горбачев К.Л.</p>
			</div>

			<div class="laba p8 n1 gr2">
				<p class="time">20:25-22:00</p>
				<p class="name">УПСвЦРС</p>
				<p class="description">лр	347-1	Горбачев К.Л.</p>
			</div>

			<div class="laba p8 n3 gr2">
				<p class="time">20:25-22:00</p>
				<p class="name">ЗНиОотЧС.РБ</p>
				<p class="description">лр	605-2	Камлач П.В.</p>
			</div>
';

$thursday = '
			<div class="voenka p1">
				<p class="time">8:00-9:35</p>
				<p class="name">Спецподготовка</p>
				<p class="description"></p>
			</div>

			<div class="voenka p2">
				<p class="time">9:45-11:20</p>
				<p class="name">Спецподготовка</p>
				<p class="description"></p>
			</div>

			<div class="voenka p3">
				<p class="time">11:40-13:15</p>
				<p class="name">Спецподготовка</p>
				<p class="description"></p>
			</div>

			<div class="voenka p4">
				<p class="time">13:25-15:00</p>
				<p class="name">Спецподготовка</p>
				<p class="description"></p>
			</div>
';

$friday = '
			<div class="practick p5">
				<p class="time">15:20-16:55</p>
				<p class="name">ФК-ЗОЖ СПИДиН</p>
				<p class="description"></p>
			</div>

			<div class="lection p6 n1 n3">
				<p class="time">17:05-18:40</p>
				<p class="name">ОИБГ</p>
				<p class="description">лк	209-3	Смирнов А.В.</p>
			</div>

			<div class="lection p6 n2 n4">
				<p class="time">17:05-18:40</p>
				<p class="name">МЦРиЭМС РЭС</p>
				<p class="description">лк	347-1	Горбачев К.Л.</p>
			</div>

			<div class="laba total p7 n2">
				<p class="time">18:45-20:20</p>
				<p class="name">УПСвЦРС</p>
				<p class="description">лр	347-1	Горбачев К.Л.</p>
			</div>

			<div class="practick p7 n1 n3">
				<p class="time">18:45-20:20</p>
				<p class="name">УПСвЦРС</p>
				<p class="description">пз	347-1	Горбачев К.Л.</p>
			</div>
';

$saturday = '
			<div class="lection p1">
				<p class="time">8:00-9:35</p>
				<p class="name">АУвСЦР</p>
				<p class="description">лк	337-1	Ганкевич С.А.</p>
			</div>

			<div class="laba total p2 n1 n3">
				<p class="time">9:45-11:20</p>
				<p class="name">АУвСЦР</p>
				<p class="description">лр	337а-1	Ганкевич С.А.</p>
			</div>

			<div class="lection p2 n2 n4">
				<p class="time">9:45-11:20</p>
				<p class="name">АУвСЦР</p>
				<p class="description">лк	418-1	Ганкевич С.А.</p>
			</div>
';

$info = '
<ul>
	<li><a href="http://bsuir-helper.ru/predmet/ekonomika-predpriyatiya-organizatsii">ЭПр</a>, <a href="http://bsuir-helper.ru/predmet/ekonomika-predpriyatiya-radioelektronnoi-promyshlennosti">ЭПр РП</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/nosenko">Носенко Алла Алексеевна</a></li>
			<li><a href="#">Карпицкая Светлана Сергеевна</a></li>
			<li><a href="http://bsuir-helper.ru/lectors/slyusar">Слюсарь Тамара Леонидовна</a></li>
		</ol>
	</li>

	<li><a href="#">МЦРиЭМС РЭС</a>, <a href="#">УПСвЦРС</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/gorbachev">Горбачев Константин Леонидович</a></li>
		</ol>
	</li>

	<li><a href="http://bsuir-helper.ru/predmet/oibg">ОИБГ</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/myakinkaya-anna-vladimirovna">Мякинькая Анна Владимировна</a></li>
			<li><a href="http://bsuir-helper.ru/lectors/smirnov-1">Смирнов Артем Владимирович</a></li>
		</ol>
	</li>

	<li><a href="http://bsuir-helper.ru/predmet/zashchita-naseleniya">ЗНиОотЧС.РБ</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/prudnik">Прудник Александр Михайлович</a></li>
			<li><a href="#">Клюев Андрей Петрович</a></li>
			<li><a href="#">Зацепин Евгений Николаевич</a></li>
		</ol>
	</li>

	<li><a href="#">ФАФиОСвЦРС</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/cherdyntsev">Чердынцев Валерий Аркадьевич</a></li>
			<li><a href="#">Мартинович Алексей Васильевич</a></li>
		</ol>
	</li>

	<li><a href="#">АУвСЦР</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/gankevich">Ганкевич Сергей Антонович</a></li>
		</ol>
	</li>

	<li><a href="http://bsuir-helper.ru/predmet/spvutsrs">СПвУЦРС</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/kazeka">Казека Александр Анатольевич</a>
		</ol>
	</li>

</ul>
';

?>