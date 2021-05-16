<?php
namespace App;
class general{
    public function getContact(){
    $con=Contact::first();
    return $con;  
    }

    public function getServicePackage($id)
    {
        $check =ServicePackage::where('service_id',$id)->get();
        return $check; 
    }

    public function getTrainingPackage($id)
{
    $check =TrainingPackage::where('service_id',$id)->get();
    return $check; 
}
}
?>