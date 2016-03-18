<?php
/**
 * Created by PhpStorm.
 * User: dongzhen
 * Date: 16/3/18
 * Time: 下午6:12
 */

class Mem {

    private $type='Memcached';

    private $m;

    private $time=0;

    private $error;

    public function __construct(){
        if (class_exists($this->type)){

            $this->m=new $this->type;

        }else{
            $this->error=NO.$this->type;
        }
    }


    public function addServer($arr,$pro){
        if(is_array($arr)){


        }else{

            $this->m->addServer($arr,$pro);
        }
    }


    public function S($key,$value,$time=NULL){

        $number=func_num_args();

        if($number==1){

            return $this->get($key);

        }else if($number>=2){

            if($value===NULL){

                $this->m->delete($key);
            }else{

                $this->set($key,$value,$time);
            }


        }

    }


    public function set($key,$value,$time=NULL){
        if($time===NULL){

            $time=$this->time;

        }
            $this->m->set($key,$value,$time);

            if($this->m->getResultCode()!=0){
            return false;
        }else{
                
            }
    }


    public function get($key){

        $return =$this->m->get($key);

        if( $this->m->getResultCode() !=0){

            return false;

        }else{
            return $return;
        }
}



    public function getError(){
        if($this->error){
            return $this->error;
        }else{
            return $this->m->getResultMessage();
        }
    }


} 