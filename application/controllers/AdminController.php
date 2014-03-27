<?php
class AdminController extends Zend_Controller_Action
{
	function preDispatch() {
	}

	public function init()
	{
		$this->initView();
		$this->view->baseUrl = $this->_request->getBaseUrl();
		$auth = Zend_Auth::getInstance();
		//on verifie si on a une connection
		$this->_helper->layout->setLayout('admin');
		
	}

	
	function indexAction(){
		$this->view->additionalMenu = '
            <ul class="additional-menu">
            	<li class="active"><a href="'.$this->_request->getBaseUrl().'/admin"><i class="icon-home"></i> Home</a></li>
            	<li><a href="'.$this->_request->getBaseUrl().'/admin/about"><i class="icon-picture"></i> A propos </a></li>
            	<li><a href="'.$this->_request->getBaseUrl().'/admin/galerie"><i class="icon-picture"></i> Galerie </a></li>
 							<li><a href="'.$this->_request->getBaseUrl().'/admin/header"><i class="icon-picture"></i> header </a></li>
 							<li><a href="'.$this->_request->getBaseUrl().'/admin/footer"><i class="icon-picture"></i> footer </a></li>
            </ul> ';


		$home=new Application_Model_DbTable_Home();
		$this->view->home = $home->fetchAll();
		
		if($this->_request->isPost()){
			//var_dump($_FILES['file1']['name']);
			$security= new Application_Model_Class_Security();
			$image= new Application_Model_Class_Zebra();
			$where = array('id_home= ?' => "1");
				
			/**  TRAITEMENT HOME PAGE**/
			if(!$security::recursiveEmpty($_POST)) {
				/** fair update dans la base de donnner**/
				if(!empty($_POST["titre"])){
				$data1 = array('titre' => $_POST["titre"]);
				$home->update($data1, $where);
				}
			
				if(!empty($_POST["bouton"])){
					$data2 = array('bouton'=>$_POST["bouton"]);
					$home->update($data2, $where);
				}
				
				if(!empty($_POST["slogan"])){
					$data3 = array('slogan'=>$_POST["slogan"]);
					$home->update($data3, $where);
				}
					
				/**  UPLOAD IMAGE**/
				if(!empty($_FILES['home_img']['name'])){
					/** mettre limage grace au code recu par mail**/
					$image->source_path = $_FILES['home_img']["tmp_name"];
					move_uploaded_file ($_FILES['home_img']["tmp_name"] , '../public/img/home/home.png');
				}
					
				//rafraichi la page
				$this->_redirect('admin');
			}
		}
			
	}
		
	
	function aboutAction(){
		$this->view->additionalMenu = '
            <ul class="additional-menu">
            	<li class="active"><a href="'.$this->_request->getBaseUrl().'/admin"><i class="icon-home"></i> Home</a></li>
            	<li><a href="'.$this->_request->getBaseUrl().'/admin/about"><i class="icon-picture"></i> A propos </a></li>
            	<li><a href="'.$this->_request->getBaseUrl().'/admin/galerie"><i class="icon-picture"></i> Galerie </a></li>
 							<li><a href="'.$this->_request->getBaseUrl().'/admin/header"><i class="icon-picture"></i> header </a></li>
 							<li><a href="'.$this->_request->getBaseUrl().'/admin/footer"><i class="icon-picture"></i> footer </a></li>
            </ul> ';
		
		
		
		$about=new Application_Model_DbTable_About();
		$this->view->about = $about->fetchAll();
		
		
		if($this->_request->isPost()){
			//var_dump($_FILES['file1']['name']);
			$security= new Application_Model_Class_Security();
			$image= new Application_Model_Class_Zebra();
			$where = array('id_about= ?' => "1");
		
			/**  TRAITEMENT HOME PAGE**/
			if(!$security::recursiveEmpty($_POST)) {
				if(!empty($_POST["titre_image"])){
					/** fair update dans la base de donnner**/
					$data1 = array('titre_image' => $_POST["titre_image"]);
					$about->update($data1, $where);
				}
					
				if(!empty($_POST["titre_about"])){
					$data2 = array('titre_about'=>$_POST["titre_about"]);
					$about->update($data2, $where);
				}
					
				if(!empty($_POST["description_about"])){
					$data3 = array('description_about'=>$_POST["description_about"]);
					$about->update($data3, $where);
				}
				
				if(!empty($_POST["accroche_image"])){
					$data4 = array('accroche_image'=>$_POST["accroche_image"]);
					$about->update($data4, $where);
				}
					
				if(!empty($_POST["accroche_about"])){
					$data5 = array('accroche_about'=>$_POST["accroche_about"]);
					$about->update($data5, $where);
				}
			
				/**  UPLOAD IMAGE**/
				if(!empty($_FILES['img_about']['name'])){
					/** mettre limage grace au code recu par mail**/
					$image->source_path = $_FILES['img_about']["tmp_name"];
					$image->target_path =  '../public/img/about/about.png';
					$image->resize(500, 335, ZEBRA_IMAGE_CROP_CENTER);
				}
			
				//rafraichi la page
				$this->_redirect('admin/about');
			}
		}
	}
	
	
	function galerieAction(){
		$this->view->additionalMenu = '
            <ul class="additional-menu">
            	<li><a href="'.$this->_request->getBaseUrl().'/admin"><i class="icon-home"></i> Home</a></li>
            	<li><a href="'.$this->_request->getBaseUrl().'/admin/about"><i class="icon-picture"></i> A propos </a></li>
            	<li class="active"><a href="'.$this->_request->getBaseUrl().'/admin/galerie"><i class="icon-picture"></i> Galerie </a></li>
 							<li><a href="'.$this->_request->getBaseUrl().'/admin/header"><i class="icon-picture"></i> header </a></li>
 							<li><a href="'.$this->_request->getBaseUrl().'/admin/footer"><i class="icon-picture"></i> footer </a></li>
            </ul> ';
		
		$Galerie= new Application_Model_DbTable_Gallery;
		$this->view->galerie = $Galerie->fetchAll();
		$Galerie_text= new Application_Model_DbTable_Gallerytext;
		//$this->view->galerie_text = $Galerie_text->fetchAll();
		
		 
		if($this->_request->isPost()){
			$image= new Application_Model_Class_Zebra();
			$security= new Application_Model_Class_Security();
			$where=array('id_gallery_text  ?' => "1");
			
			
			if(!empty($_POST["titre_gallery"])){
				$where_1=array('id_gallery_text  ?' => "1");
				$data_1 = array("gallery_text_titre"=>$_POST["titre_gallery"]);
				$Galerie_text->update($data_1, $where_1);
			}
			
			if(!empty($_POST["description_gallery"])){
				$where_titre=array('id_gallery_text  ?' => "1");
				$data_titre = array("gallery_text_describe"=>$_POST["description_gallery"]);
				$Galerie_text->update($data_titre, $where_titre);
			}
				
			if(!empty($_FILES['photo']) && strlen($_FILES['photo']['name'])=='0')
				echo '<script language="Javascript">alert ("inserer une image" )</script>';
		
			 
			else{if(!empty($_FILES['photo']['name'])){
				/** crop l'image**/
				if($_FILES['photo']["size"]){
					$image= new Application_Model_Class_Zebra();
					$image->source_path = $_FILES['photo']["tmp_name"];
					$image->target_path =  '../public/img/galerie/'.$_POST["img_name"];
					$image->resize(510, 395, ZEBRA_IMAGE_CROP_CENTER);
					move_uploaded_file ($_FILES['photo']["tmp_name"] , '../public/img/galerie/original/'.$_POST["img_name"]);
			   
					if((!empty($_POST["titre"])) && (empty($_POST["description"] ))){
						/** fair update dans la base de donnner**/
						$data = array("title_gallery" => $_POST["titre"], "image" => $_POST["img_name"]);
						$Galerie->insert($data);
					}
					
					if((!empty($_POST["description"])) && (empty($_POST["titre"]))){
						/** fair update dans la base de donnner**/
						$data = array("describe_gallery" => $_POST["description"], "image" => $_POST["img_name"]);
						$Galerie->insert($data);
					}
					
					if((!empty($_POST["titre"])) && (!empty($_POST["description"] ))){
						/** fair update dans la base de donnner**/
						$data = array("title_gallery" => $_POST["titre"],"describe_gallery" => $_POST["description"], "image" => $_POST["img_name"]);
						$Galerie->insert($data);
					}
					$this->_redirect('admin/galerie');
				}
			}
			}
		
			if(!empty($_POST['img_delete'])){
				$img= $Galerie->find($_POST['img_delete'])->current();
				$where=array('id_gallery = ?' => $_POST['img_delete']);
				$Galerie->delete($where);
				unlink ("../public/img/galerie/".$img->image);
				unlink ("../public/img/galerie/original/".$img->image);
				$this->_redirect('admin/galerie');
			}
		
			if(!empty($_POST["titre_edit"] )){
				/** fair update dans la base de donnner**/
				$where=array('id_gallery = ?' => $_POST['img_edit']);
				$data = array("title_gallery" => $_POST["titre_edit"]);
				$Galerie->update($data, $where);
			}
			
			if(!empty($_POST["description_edit"] )){
				/** fair update dans la base de donnner**/
				$where=array('id_gallery = ?' => $_POST['img_edit']);
				$data = array("describe_gallery" => $_POST["description_edit"]);
				$Galerie->update($data, $where);
			}
			 
			if(!empty($_FILES['photo_edit']['name'])){
				/** crop l'image**/
				$img= $Galerie->find($_POST['img_edit'])->current();
				$image= new Application_Model_Class_Zebra();
				$image->source_path = $_FILES['photo_edit']["tmp_name"];
				$image->target_path =  '../public/img/galerie/'.$img->image;
				$image->resize(510, 395, ZEBRA_IMAGE_CROP_CENTER);
				move_uploaded_file ($_FILES['photo_edit']["tmp_name"] , '../public/img/galerie/original/'.$img->image);
				
			}
			 

			$this->_redirect('admin/galerie');
		}
	

		 
		
	}
	
	
	
}
	

	//$Social->update($data, $where);
	//var_dump($where);
	//var_dump($data);
	
	//condition
	//$where = array('id_social = ?' => 1);
	
	//afficher tout:
	//$temp=$Social->fetchAll();
	
	//afficher avec un condition
	//$temp=$Social->fetchAll($where);
	
	//find pour trouver qu'avec la clé primaire
	//$temp=$Social->find(1)->current();
	
	//$data = array('libelle' => 'tess','state'=>1);
	
	//insertion:
	//$Social->insert($data);
	
	//mise a jour:
	//$Social->update($data, $where);
	
	//supprimer:
	//$Social->delete($where);
	
	//afficher tableau avec une contion
	//var_dump($temp);
	
	//afficher le champs choisi
	//echo $temp['libelle'];
