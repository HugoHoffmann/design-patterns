<?php
require_once './FactoryComboBox.php';
require_once './FactoryTextBox.php';
$objetoTexto = new FactoryTextBox();
$objetoCMD = new FactoryComboBox();
$NovotxtBox1 = $objetoTexto->Create("nome", "nome", 40, "Hugo Hoffmann");
$NovotxtBox2 = $objetoTexto->Create("email", "email", 40, "hugohoffmann04@gmail.com");
$NovoCMD1 = $objetoCMD->Create("Sexo", "Sexo", 1);
$NovoCMD1->addNewItem("M", "Masculino");
$NovoCMD1->addNewItem("F", "Feminino");
echo $NovotxtBox1->getHTML();
echo $NovotxtBox2->getHTML();
echo $NovoCMD1->getHTML();

