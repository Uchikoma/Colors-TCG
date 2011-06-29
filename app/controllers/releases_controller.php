<?php
class ReleasesController extends AppController {
	var $helpers = array('Html', 'Form');
	var $components = array('Session');
	var $name = 'Releases';
		
	function index() 
	{
		array_push($this->helpers, 'Time'); //Only this action uses this.
		$this->set( 'releases', $this->Release->find('all') );
	}
	
	function add() 
	{
		if ( !empty( $this->data ) )
		{
			if ( $this->Release->save( $this->data ) )
			{
				$this->Session->setFlash('New release created.');
				$this->redirect( array('action' => 'index') );
			}
		}
		
		$this->render('form_release');
	}
	
	function edit($id = null) 
	{
		if ( empty( $this->data ) ) 
		{
			$this->Release->id = $id;
			$this->data = $this->Release->read(); //TODO: Empty (invalid) case. Trust CakePHP in security of $id?
		}
		else
		{
			if ( $this->Release->save( $this->data ) )
			{
				$this->Session->setFlash('Release details updated.');
				$this->redirect( array('action' => 'index') );
			}
		}	
		
		// If $this->data is still empty at this point, this implies that $id gives us a non-existant record
		if ( empty( $this->data ) )
		{
			$this->Session->setFlash('Release does not exist.');
			$this->redirect( array('action' => 'index') );
		}
		
		$this->render('form_release');
	}
	
	//Deleting a release should orphan any decks associated with it.
	function delete($id = null) 
	{
		if ( $this->Release->delete($id, false) )
		{
			$this->Session->setFlash("Release $id has been deleted.");	
		}
		
		$this->redirect( array('action' => 'index') );	
	}
}
?>