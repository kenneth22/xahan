<?php
class breezehub
{
    private $dataInput;
	private $formId;
	private $ref;
	private $refUrl;
	private $excepts;
	
	public function __construct($excepts = null)
	{
		$this->setExcepts($excepts);
		
		$this->dataInput = array();
		
	}
	
	public function setExcepts($excepts)
	{
		return $this->excepts = $excepts;
	}
	
	public function submitPost($data)
	{
		$this->assignFormId($data['form_id']);
		
		$this->ref = curl_init($this->getRefUrl()); 

        curl_setopt($this->ref, CURLOPT_POST, true);

        curl_setopt($this->ref, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($this->ref, CURLOPT_POSTFIELDS, $this->sortInput($data));     

		//curl_setopt($this->ref, CURLOPT_USERPWD, $frmKey.':password123');

        curl_setopt($this->ref, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

        curl_setopt($this->ref, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($this->ref, CURLOPT_SSL_VERIFYHOST, false);

        //curl_setopt($this->ref, CURLOPT_FOLLOWLOCATION, true);

        curl_setopt($this->ref, CURLOPT_USERAGENT, 'goleads.breezego.com');
        return html_entity_decode(curl_exec($this->ref));
		
	
	}
	
	public function sortInput($inputs)
	{
	   
	   foreach($inputs as $key=>$input)
	   {
			if(!in_array($key,$this->excepts)){
				
				$this->dataInput[$key] = $input; 
			}
	   }
	   
	   return $this->dataInput;
	
	}

	
	public function assignFormId($id)
	{
        return $this->formId = $id;  		 
 	 
	}
	
	public function getRefUrl()
	{
		return $this->refUrl = "http://goleads.breezego.com/api/entries.aspx?frm=".$this->formId;
		
	}
}
