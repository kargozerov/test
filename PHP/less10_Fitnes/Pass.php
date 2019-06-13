<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



class Pass
{
	protected $dateRegStart; //дата регистрации
	protected $dateRegEnd; //дата окончания действия абонемента
	protected $locations = []; //доступные зоны
	protected $startTime; // вход
	protected $endTime; //выход
	protected $clientInfo; //информация о владельце
	
	//конструктор 
	public function __construct (clientInfo $clientData) // у всех клиентов будет одинаковое:
	{
		$this->clientData = $clientData;
		$this->dateRegStart = date_create(); // date_create() - без аргументов вернет объект  DateTime с текущей датой (в виде объекта)
		$this->startTime = date_create("8:00"); //передаем время начала (дата будет текущей за счет DateTime)

	}
	 /**
     * @return DateTime|false //возвращаемый тип
     */
    public function getDateRegStart()
    {
        return $this->dateRegStart;
    }
    /**
     * @param DateTime|false $dateRegStart // то что возвращает
     */
    public function setDateRegStart($dateRegStart)
    {
        $this->dateRegStart = $dateRegStart;
    }
    /**
     * @return mixed
     */
    public function getDateRegEnd()
    {
        return $this->dateRegEnd;
    }
    /**
     * @param mixed $dateRegEnd
     */
    public function setDateRegEnd($dateRegEnd)
    {
        $this->dateRegEnd = $dateRegEnd;
    }
    /**
     * @return array
     */
    public function getLocations(): array
    {
        return $this->locations;
    }
    /**
     * @param array $locations
     */
    public function setLocations(array $locations)
    {
        $this->locations = $locations;
    }
    /**
     * @return DateTime|false
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    /**
     * @param DateTime|false $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }
    /**
     * @return ClientData
     */
    public function getClientData(): ClientData
    {
        return $this->clientData;
    }
    /**
     * @param ClientData $clientData
     */
    public function setClientData(ClientData $clientData)
    {
        $this->clientData = $clientData;
    }



}



























 ?>