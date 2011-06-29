<?php
class ColorsController extends AppController {
	var $name = 'Colors';
		
	function index() 
	{
		$this->set( 'colors', $this->Color->find('all') );
	}
	
	function add() 
	{
		if ( !empty( $this->data ) )
		{
			if ( $this->Color->save( $this->data ) )
			{
				$this->Session->setFlash('New deck color added.');
				$this->redirect( array('action' => 'index') );
			}
		}
		
		$this->render('form_color');
	}
	
	function edit($id = null) 
	{
		if ( empty( $this->data ) ) 
		{
			$this->Color->id = $id;
			$this->data = $this->Color->read(); //TODO: Empty (invalid) case. Trust CakePHP in security of $id?
		}
		else
		{
			if ( $this->Color->save( $this->data ) )
			{
				$this->Session->setFlash('Color updated.');
				$this->redirect( array('action' => 'index') );
			}
		}	
		
		// If $this->data is still empty at this point, this implies that $id gives us a non-existant record
		if ( empty( $this->data ) )
		{
			$this->Session->setFlash('Color does not exist.');
			$this->redirect( array('action' => 'index') );
		}
		
		$this->render('form_color');
	}
}
?>