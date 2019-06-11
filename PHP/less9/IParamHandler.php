<?php 

//интерфейс
//на основе интерфейса нельзя создать объект
//интрефейсы содержат только абстарктные методы - т.е. методы без реализации
//классы, расширяющие интерфейсы должны реализовыввать все методы интерфейса
interface IParamHandler
{
	public function read();
	public function write();
	public function addParam($key, $value);
	public function getAllParams();
	public function getParamByKey($key);
}












 ?>