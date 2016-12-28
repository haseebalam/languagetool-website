<!doctype html>
<html lang=en>
<head>
    <?php
    $enable_tablesorter = 1;
    $page = "other";
    $title = "LanguageTool Supported Languages";
    ?>
    <?php include("../../include/header.php"); ?>
</head>
<body>
<?php include("../../include/partials/nav.php"); ?>

<div id="textContent">

<p>LanguageTool supports several languages to a different degree. This page lists the
number of rules per language to give a very rough indication of how well a
language is supported. If your language is not supported, see <a href="http://wiki.languagetool.org/development-overview#toc0">our three-minute introduction</a>
on writing error detection rules. Of course you're welcome to improve and add rules for the existing languages, too.</p>

<!-- Output of RuleOverview.java: -->

<b>Rules in LanguageTool 3.6</b><br />
Date: 2016-12-28<br /><br />

<table class="tablesorter sortable" style="width: auto">
    <thead>
    <tr>
        <th valign='bottom' width="200">Language</th>
        <th valign='bottom' align="left" width="60">XML<br/>rules</th>
        <th></th>
        <th align="left" width="60">Java<br/>rules</th>
        <th align="left" width="60">False<br/>friends</th>
        <th align="left" width="60">Spell<br/>check*</th>
        <th align="left" width="60">Confusion<br/>pairs</th>
        <th valign='bottom' align="left" width="70">Activity</th>
        <th valign='bottom' align="left">Rule Maintainers</th>
    </tr>
    </thead>
    <tbody>
    <tr><td valign="top">Asturian </td><td valign="top" align="right">61</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ast">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ast/src/main/resources/org/languagetool/rules/ast/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>1</span><img title='1 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Xesús González Rato</span></td></tr>
    <tr><td valign="top">Belarusian </td><td valign="top" align="right">7</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=be">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/be/src/main/resources/org/languagetool/rules/be/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Alex Buloichik</span></td></tr>
    <tr><td valign="top"><a href="../br/">Breton</a></td><td valign="top" align="right">673</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=br">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/br/src/main/resources/org/languagetool/rules/br/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/br/src/main/java/org/languagetool/rules/br/">2</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>4</span><img title='4 commits in the last 6 months' src='../images/bar.png' width='2' height='10'/></td><td valign="top" align="left"><a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a>, Fulup Jakez</td></tr>
    <tr><td valign="top"><a href="../ca/">Catalan</a><br/><span class='langVariants'>Variants for: Valencian</span></td><td valign="top" align="right">2693</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ca">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ca/src/main/resources/org/languagetool/rules/ca/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ca/src/main/java/org/languagetool/rules/ca/">14</a></td><td valign="top" align="right">4</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>239</span><img title='239 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='239 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left">Ricard Roca, Jaume Ortolà</td></tr>
    <tr><td valign="top"><a href="../zh/">Chinese</a></td><td valign="top" align="right">787</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=zh">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/zh/src/main/resources/org/languagetool/rules/zh/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/zh/src/main/java/org/languagetool/rules/zh/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right"></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Tao Lin</span></td></tr>
    <tr><td valign="top">Danish </td><td valign="top" align="right">78</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=da">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/da/src/main/resources/org/languagetool/rules/da/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">6</td><td valign="top" align="right"><span title='spell check without suggestions'>(✓)</span></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Esben Aaberg, Henrik Bendt</span></td></tr>
    <tr><td valign="top"><a href="../nl/">Dutch</a></td><td valign="top" align="right">741</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=nl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/nl/src/main/resources/org/languagetool/rules/nl/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/nl/src/main/java/org/languagetool/rules/nl/">4</a></td><td valign="top" align="right">19</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: <a href="http://www.opentaal.org">OpenTaal</a>, <a href="http://www.taaltik.nl">TaalTik</a></span></td></tr>
    <tr><td valign="top">English <br/><span class='langVariants'>Variants for: Australian, Canadian, GB, New Zealand, South African, US</span></td><td valign="top" align="right">1516</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=en">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/en/src/main/resources/org/languagetool/rules/en/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/en/src/main/java/org/languagetool/rules/en/">16</a></td><td valign="top" align="right">356</td><td valign="top" align="right">✓</td><td valign="top" align="right">701</td><td valign="top" align="right"><span style='display:none'>108</span><img title='108 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='108 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left">Mike Unwalla, <a href="http://marcinmilkowski.pl">Marcin Miłkowski</a>, <a href="http://www.danielnaber.de">Daniel Naber</a></td></tr>
    <tr><td valign="top"><a href="../eo/">Esperanto</a></td><td valign="top" align="right">370</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=eo">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/eo/src/main/resources/org/languagetool/rules/eo/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/eo/src/main/java/org/languagetool/rules/eo/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span title='spell check without suggestions'>(✓)</span></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>3</span><img title='3 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a></td></tr>
    <tr><td valign="top"><a href="../fr/">French</a></td><td valign="top" align="right">2722</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=fr">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fr/src/main/resources/org/languagetool/rules/fr/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fr/src/main/java/org/languagetool/rules/fr/">6</a></td><td valign="top" align="right">6</td><td valign="top" align="right"><span title='spell check without suggestions'>(✓)</span></td><td valign="top" align="right">25</td><td valign="top" align="right"><span style='display:none'>25</span><img title='25 commits in the last 6 months' src='../images/bar.png' width='12' height='10'/></td><td valign="top" align="left"><a href="http://dominiko.livejournal.com/tag/lingvoilo">Dominique Pellé</a></td></tr>
    <tr><td valign="top">Galician </td><td valign="top" align="right">153</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=gl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/gl/src/main/resources/org/languagetool/rules/gl/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/gl/src/main/java/org/languagetool/rules/gl/">2</a></td><td valign="top" align="right">113</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Susana Sotelo Docío</span></td></tr>
    <tr><td valign="top"><a href="../de/">German</a><br/><span class='langVariants'>Variants for: Austria, Germany, Swiss</span></td><td valign="top" align="right">2158</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=de">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/de/src/main/resources/org/languagetool/rules/de/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/de/src/main/java/org/languagetool/rules/de/">24</a></td><td valign="top" align="right">126</td><td valign="top" align="right">✓</td><td valign="top" align="right">74</td><td valign="top" align="right"><span style='display:none'>128</span><img title='128 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='128 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left">Jan Schreiber, Markus Brenneis, <a href="http://www.danielnaber.de">Daniel Naber</a></td></tr>
    <tr><td valign="top">Greek </td><td valign="top" align="right">30</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=el">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/el/src/main/resources/org/languagetool/rules/el/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/el/src/main/java/org/languagetool/rules/el/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Panagiotis Minos</td></tr>
    <tr><td valign="top">Icelandic </td><td valign="top" align="right">39</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=is">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/is/src/main/resources/org/languagetool/rules/is/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"><span title='spell check without suggestions'>(✓)</span></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Anton Karl Ingason</span></td></tr>
    <tr><td valign="top"><a href="../it/">Italian</a></td><td valign="top" align="right">140</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=it">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/it/src/main/resources/org/languagetool/rules/it/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/it/src/main/java/org/languagetool/rules/it/">2</a></td><td valign="top" align="right">37</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left">Paolo Bianchini</td></tr>
    <tr><td valign="top">Japanese </td><td valign="top" align="right">734</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ja">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ja/src/main/resources/org/languagetool/rules/ja/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">7</td><td valign="top" align="right"></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Takahiro Shinkai</span></td></tr>
    <tr><td valign="top">Khmer </td><td valign="top" align="right">33</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=km">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/km/src/main/resources/org/languagetool/rules/km/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/km/src/main/java/org/languagetool/rules/km/">4</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>2</span><img title='2 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Nathan Wells</span></td></tr>
    <tr><td valign="top">Lithuanian </td><td valign="top" align="right">4</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=lt">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/lt/src/main/resources/org/languagetool/rules/lt/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Mantas Kriaučiūnas</span></td></tr>
    <tr><td valign="top">Malayalam </td><td valign="top" align="right">18</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ml">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ml/src/main/resources/org/languagetool/rules/ml/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Jithesh.V.S</span></td></tr>
    <tr><td valign="top">Persian </td><td valign="top" align="right">283</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=fa">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fa/src/main/resources/org/languagetool/rules/fa/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/fa/src/main/java/org/languagetool/rules/fa/">7</a></td><td valign="top" align="right">0</td><td valign="top" align="right"></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>2</span><img title='2 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Reza1615, Alireza Eskandarpour Shoferi, Ebrahim Byagowi</span></td></tr>
    <tr><td valign="top"><a href="../pl/">Polish</a></td><td valign="top" align="right">1472</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=pl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pl/src/main/resources/org/languagetool/rules/pl/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pl/src/main/java/org/languagetool/rules/pl/">7</a></td><td valign="top" align="right">148</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>49</span><img title='49 commits in the last 6 months' src='../images/bar.png' width='24' height='10'/></td><td valign="top" align="left"><a href="http://marcinmilkowski.pl">Marcin Miłkowski</a></td></tr>
    <tr><td valign="top"><a href="../pt/">Portuguese</a><br/><span class='langVariants'>Variants for: Angola preAO, Brazil, Moçambique preAO, Portugal</span></td><td valign="top" align="right">1145</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=pt">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pt/src/main/resources/org/languagetool/rules/pt/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/pt/src/main/java/org/languagetool/rules/pt/">14</a></td><td valign="top" align="right">0</td><td valign="top" align="right"><span title='spell check without suggestions'>(✓)</span></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>200</span><img title='200 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='200 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left"><a href="http://www.marcoagpinto.com/">Marco A.G. Pinto</a>, <a href="https://github.com/MatheusPoletto">Matheus Poletto</a>, <a href="tiagofsantos81@sapo.pt">Tiago F. Santos (3.6)</a></td></tr>
    <tr><td valign="top">Romanian </td><td valign="top" align="right">457</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ro">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ro/src/main/resources/org/languagetool/rules/ro/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ro/src/main/java/org/languagetool/rules/ro/">3</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>1</span><img title='1 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: <a href="http://www.archeus.ro">Ionuț Păduraru</a></span></td></tr>
    <tr><td valign="top"><a href="../ru/">Russian</a></td><td valign="top" align="right">688</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ru">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ru/src/main/resources/org/languagetool/rules/ru/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ru/src/main/java/org/languagetool/rules/ru/">8</a></td><td valign="top" align="right">28</td><td valign="top" align="right">✓</td><td valign="top" align="right">2</td><td valign="top" align="right"><span style='display:none'>356</span><img title='356 commits in the last 6 months' src='../images/bar-end.png' width='22' height='10'/><img title='356 commits in the last 6 months' src='../images/bar.png' width='50' height='10'/></td><td valign="top" align="left"><a href="http://myooo.ru/content/view/83/43/">Yakov Reztsov</a></td></tr>
    <tr><td valign="top">Slovak </td><td valign="top" align="right">22</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=sk">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sk/src/main/resources/org/languagetool/rules/sk/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sk/src/main/java/org/languagetool/rules/sk/">1</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: <a href="http://sk-spell.sk.cx">Zdenko Podobný</a></span></td></tr>
    <tr><td valign="top">Slovenian </td><td valign="top" align="right">85</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=sl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sl/src/main/resources/org/languagetool/rules/sl/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Martin Srebotnjak</span></td></tr>
    <tr><td valign="top"><a href="../es/">Spanish</a></td><td valign="top" align="right">116</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=es">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/es/src/main/resources/org/languagetool/rules/es/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/es/src/main/java/org/languagetool/rules/es/">1</a></td><td valign="top" align="right">57</td><td valign="top" align="right">✓</td><td valign="top" align="right">14</td><td valign="top" align="right"><span style='display:none'>19</span><img title='19 commits in the last 6 months' src='../images/bar.png' width='9' height='10'/></td><td valign="top" align="left"><a href="http://languagetool-es.blogspot.com/">Juan Martorell</a></td></tr>
    <tr><td valign="top">Swedish </td><td valign="top" align="right">26</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=sv">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sv/src/main/resources/org/languagetool/rules/sv/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/sv/src/main/java/org/languagetool/rules/sv/">1</a></td><td valign="top" align="right">15</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>1</span><img title='1 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Niklas Johansson</span></td></tr>
    <tr><td valign="top">Tagalog </td><td valign="top" align="right">44</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=tl">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/tl/src/main/resources/org/languagetool/rules/tl/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: <a href="http://www.dlsu.edu.ph/research/centers/adric/nlp/">Nathaniel Oco</a>, <a href="http://www.dlsu.edu.ph/research/centers/adric/nlp/faculty/borra.asp">Allan Borra</a></span></td></tr>
    <tr><td valign="top">Tamil </td><td valign="top" align="right">210</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=ta">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/ta/src/main/resources/org/languagetool/rules/ta/grammar.xml">XML</a></td><td valign="top" align="right">0</td><td valign="top" align="right">0</td><td valign="top" align="right"></td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>0</span><img title='0 commits in the last 6 months' src='../images/bar.png' width='1' height='10'/></td><td valign="top" align="left"><span class='maintainerNeeded'><a href='http://wiki.languagetool.org/tasks-for-language-maintainers'>Looking for maintainer</a></span> - <span class='previousMaintainer'><br>previous maintainer: Elanjelian Venugopal</span></td></tr>
    <tr><td valign="top"><a href="../uk/">Ukrainian</a></td><td valign="top" align="right">411</td><td valign="top" align="right"><a href="http://community.languagetool.org/rule/list?lang=uk">Browse</a>,&nbsp;<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/uk/src/main/resources/org/languagetool/rules/uk/grammar.xml">XML</a></td><td valign="top" align="right"><a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-language-modules/uk/src/main/java/org/languagetool/rules/uk/">15</a></td><td valign="top" align="right">0</td><td valign="top" align="right">✓</td><td valign="top" align="right">0</td><td valign="top" align="right"><span style='display:none'>57</span><img title='57 commits in the last 6 months' src='../images/bar.png' width='28' height='10'/></td><td valign="top" align="left">Andriy Rysin, Maksym Davydov</td></tr>
    </tbody>
</table>

<!-- End Output of RuleOverview.java -->

<p>* ✓ = spell check &nbsp;&nbsp; (✓) = spell check but no suggestions for misspellings</p>
    
<p>The number of Java rules listed is only the number of rules specific
to that language. There are some rules that deal with punctuation
and that apply to almost all languages. The "Activity" column counts
the number of changes to the rules of that language in the last 6 months.</p>

<p>
<a href="https://github.com/languagetool-org/languagetool/blob/master/languagetool-core/src/main/resources/org/languagetool/rules/false-friends.xml">Show false friend rules source code file</a>
</p>

</div>

<?php include("../../include/footer.php"); ?>

</body>
</html>
