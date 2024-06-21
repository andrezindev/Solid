/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Desenvolvedor: Andre Lucas de azevedo santana
*/ 

<?php
// ISP/CSVExporterInterface.php
interface CSVExporterInterface {
    public function export(array $data, $filename);
}
