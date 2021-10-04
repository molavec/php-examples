
<?php /* 1.- Formato tradicional */?>
<?php echo 'si quiere proveer código de PHP a documentos XHTML o XML, emplee estas etiquetas'; ?>

<?php /* 2.- Formato abreviado */ ?>
<?= 'Impreme cadena formato abreviado.' ?>

<?php /* 3.- Formatos abreviado:
* <?= <-- después de la versión 5.4 o con short_open_tag en php.ini con la opción --enable-short-tags
* <?  <-- después de la versión 5.4 o con short_open_tag en php.ini con la opción --enable-short-tags
*/ ?>
<?= 'Impreme cadena formato abreviado.' ?>
<? echo 'Impreme cadena formato abreviado.' ?>

<?php /* 4.- Concatenación */ ?>
<? $variable = 'texto en variable' ?>
<? echo 'texto 1 - '.$variable. ' - texto 2'; ?>
