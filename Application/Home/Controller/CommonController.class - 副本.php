<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    
    public function __construct(){
    	parent::__construct();
    	$cateid=I('cateid');
    	$arid=I('arid');
    	$this->soncate($cateid,$arid);
    }

    public function soncate($cateid=0,$arid=0){
    	//判断当前栏目是否有子栏目，有就获取
    	if($cateid){
    		$cate=D('cate');
    		$cates=$cate->find($cateid);
    		//顶级栏目的情况
    		if($cates['class']==1){  
    			//如果当前分类是顶级分类，那么获取此分类下所有的二级分类
    			$son2=$cate->where("parentid=$cateid")->select();  //son2代表二级分类
    			$this->assign('son2',$son2);
    			$this->assign('son3',null);
    			//顶级栏目名称
    			$this->assign('topname',$cates['name']);
    		}
    		//二级栏目的情况
    		if($cates['class']==2){  //如果当前分类是二级分类，那么获取此分类下所有的同级二级分类，在获取当前分类的三级分类
    			$topcates=$cate->where('id='.$cates['parentid'])->find();  //当前二级分类的顶级分类的信息
    			$son2=$cate->where('parentid='.$cates['parentid'])->select();  //son2代表二级分类
    			//查询当前二级分类的子分类即对应当前栏目的三级栏目
    			$son3=$cate->where("parentid=$cateid")->select();
    			$this->assign('son2',$son2);
    			$this->assign('son3',$son3);
    			//顶级栏目名称
    			$this->assign('topname',$topcates['name']);
    		}
    		//三级栏目的情况
    		if($cates['class']==3){
    			$upercates=$cate->where('id='.$cates['parentid'])->find();//对应该三级栏目的二级栏目
    			$topcates=$cate->where('id='.$upercates['parentid'])->find();//对应该栏目的顶级栏目信息
    			$son2=$cate->where('parentid='.$topcates['id'])->select();//二级栏目的结果集
    			$son3=$cate->where('parentid='.$upercates['id'])->select();
    			$this->assign('son2',$son2);
    			$this->assign('son3',$son3);
    			$this->assign('son3pid',$upercates['id']);
    			//顶级栏目名称
    			$this->assign('topname',$topcates['name']);

    		}

    	}
    	//判断当前文章id所属栏目，并去除子栏目
    	if($arid){

    	}

    }

























}