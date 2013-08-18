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
			<div class="lection p5">
				<p class="time">15:20-16:55</p>
				<p class="name">МЦРиЭМС РЭС</p>
				<p class="description">лк	347-1	Горбачев К.Л.</p>
			</div>

			<div class="lection p6">
				<p class="time">17:05-18:40</p>
				<p class="name">СПИсРСС</p>
				<p class="description">лк	337-1	Чердынцев В.А.</p>
			</div>

			<div class="laba total p7 n2">
				<p class="time">18:45-20:20</p>
				<p class="name">ОТ</p>
				<p class="description">лр	601-2	Амелин М.А.</p>
			</div>
';

$tuesday = '
			<div class="practick p4 n2 n4">
				<p class="time">13:25-15:00</p>
				<p class="name">ОПиУП</p>
				<p class="description">пз	222-5	Фещенко С.Л.</p>
			</div>

			<div class="lection p5">
				<p class="time">15:20-16:55</p>
				<p class="name">СиС ЦРС</p>
				<p class="description">лк	402-1	Козел В.М.</p>
			</div>

			<div class="laba p6 n1 n3 gr1">
				<p class="time">17:05-18:40</p>
				<p class="name">МЦРиЭМС РЭС</p>
				<p class="description">лр	347-1	Горбачев К.Л.</p>
			</div>

			<div class="laba p6 n2 n4 gr1">
				<p class="time">17:05-18:40</p>
				<p class="name">ЦТиР</p>
				<p class="description">лр	518-3	Хоминич А.Л.</p>
			</div>

			<div class="laba p6 n1 n3 gr2">
				<p class="time">17:05-18:40</p>
				<p class="name">ЦТиР</p>
				<p class="description">лр	518-3	Хоминич А.Л.</p>
			</div>

			<div class="laba p6 n2 n4 gr2">
				<p class="time">17:05-18:40</p>
				<p class="name">МЦРиЭМС РЭС</p>
				<p class="description">лр	347-1	Горбачев К.Л.</p>
			</div>

			<div class="laba total p7 n1 n3">
				<p class="time">18:45-20:20</p>
				<p class="name">МЦРиЭМС РЭС</p>
				<p class="description">лр	347-1	Горбачев К.Л.</p>
			</div>
';

$wednesday = '
			<div class="practick p4 n2 n4">
				<p class="time">13:25-15:00</p>
				<p class="name">СПИсРСС</p>
				<p class="description">пз	337-1	Чердынцев В.А.</p>
			</div>

			<div class="lection p5">
				<p class="time">15:20-16:55</p>
				<p class="name">ОТ</p>
				<p class="description">лк	211-3	Осипович В.С.</p>
			</div>

			<div class="lection p6 n1 n3">
				<p class="time">17:05-18:40</p>
				<p class="name">СиС ЦРС</p>
				<p class="description">лк	402-1	Козел В.М.</p>
			</div>

			<div class="laba p6 n2 n4 gr2">
				<p class="time">17:05-18:40</p>
				<p class="name">СиС ЦРС</p>
				<p class="description">лр	347-1	Казубович Т.М.</p>
			</div>

			<div class="laba p7 n1 n3 gr1">
				<p class="time">18:45-20:20</p>
				<p class="name">СиС ЦРС</p>
				<p class="description">лр	347-1	Казубович Т.М.</p>
			</div>
';

$thursday = '
			<div class="laba total p4 n1 n3">
				<p class="time">13:25-15:00</p>
				<p class="name">ЦТиР</p>
				<p class="description">лр	518-3	Хоминич А.Л.</p>
			</div>

			<div class="lection p4 n2 n4">
				<p class="time">13:25-15:00</p>
				<p class="name">ЦТиР</p>
				<p class="description">лк	509-3	Хоминич А.Л.</p>
			</div>

			<div class="lection p5">
				<p class="time">15:20-16:55</p>
				<p class="name">ЦТиР</p>
				<p class="description">лк	509-3	Хоминич А.Л.</p>
			</div>

			<div class="laba p6 n1 gr1">
				<p class="time">17:05-18:40</p>
				<p class="name">ОТ</p>
				<p class="description">лр	601-2	Амелин М.А.</p>
			</div>

			<div class="laba p6 n3 gr2">
				<p class="time">17:05-18:40</p>
				<p class="name">ОТ</p>
				<p class="description">лр	601-2	Амелин М.А.</p>
			</div>
';

$friday = '
			<div class="lection p6">
				<p class="time">17:05-18:40</p>
				<p class="name">ОПиУП</p>
				<p class="description">лк	114-3	Ермакова Е.В.</p>
			</div>

			<div class="laba total p7 n1 n3">
				<p class="time">18:45-20:20</p>
				<p class="name">СиС ЦРС</p>
				<p class="description">лр	347-1	Казубович Т.М.</p>
			</div>

			<div class="practick p7 n2 n4">
				<p class="time">18:45-20:20</p>
				<p class="name">СиС ЦРС</p>
				<p class="description">пз	347-1	Казубович Т.М.</p>
			</div>
';

$info = '
<ul class="list-unstyled">
	<li>
		<a href="#">МЦРиЭМС РЭС ()[ЛК, ЛР]</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/gorbachev">Горбачев Константин Леонидович</a></li>
		</ol>
	</li>
	<li>
		<a href="#">СПИсРСС ()[ЛК, ПЗ]</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/cherdyntsev">Чердынцев Валерий Аркадьевич</a></li>
		</ol>
	</li>
	<li>
		<a href="#">СиС ЦРС (Системы и Сети ЦРС)[ЛК, ЛР, ПЗ]</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/kozel">Козел В.М.[ЛК]</a></li>
			<li>Казубович Т.М.[ЛР, ПЗ] (Казубович Татьяна Михайловна (Магистрант))</li>
		</ol>
	</li>
	<li><a href="#">ЦТиР (Цифровое телевидение и радио)[ЛК, ЛР]</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/khominich">Хоминич Александр Леонидович</a></li>
		</ol>
	</li>
	<li>
		<a href="#">ОТ (Охрана Труда)[ЛК, ЛР]</a>
		<ol>
			<li>Амелин М.А.[ЛР] – магистрант кафедры экономики</li>
			<li><a href="http://bsuir-helper.ru/lectors/osipovich">Осипович Виталий Семёнович[ЛК]</a></li>
		</ol>
	</li>
	<li>
		<a href="#">ОПиУП (Организация производства и управление предприятием)[ЛК, ПЗ]</a>
		<ol>
			<li><a href="http://bsuir-helper.ru/lectors/ermakova">Ермакова Екатерина Витальевна[ЛК]</a></li>
			<li><a href="http://bsuir-helper.ru/lectors/feshchenko">Фещенко Светлана Леонидовна[ПЗ]</a></li>
		</ol>
	</li>
</ul>
';

?>