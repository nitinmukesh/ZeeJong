<?php
/*
 Place a bet template

 Created March 2014
 */
 ?>
	<div class="container">

		<div class="col-md-12">
			<h1>Place a bet</h1>
		</div>
		
		
		
		<?php
		global $database;
		if(!loggedIn()){
		// User is not logged in
	
		?>
		<div class="alert alert-danger">
			<strong>You are not logged in.</strong>
		</div>
		<?php
		}else if($this->stop()){

		if(strlen($this->getErrorMessage())>0){
		// there were errors, let's display them
		?>
		<div class="alert alert-danger">
			<strong> <?php
			echo nl2br($this -> getErrorMessage());
			?></strong>
		</div>
	
		<?php
		}

		}else{
		if(strlen($this->getErrorMessage())>0){
		// there were errors, let's display them
		?>
		<div class="alert alert-danger">
			<strong> <?php
			echo nl2br($this -> getErrorMessage());
			?></strong>
		</div>
	
		<?php
		}
		if(strlen($this->getSuccessMessage())>0){
		// at least one thing succeeded, let's display what
		?>
		<div class="alert alert-success">
			<strong> <?php
			echo nl2br($this -> getSuccessMessage());
			?></strong>
		</div>
		
	<?php
	}
	else{
	// Display 'add bet' form
?>
	
	
	<div class="col-md-6">
	
		<div class="well">
			<form id="changeSettings" class="form-horizontal" role="form" method="post" action="<?php echo SITE_URL ?>place-bet/<?php echo $this->getMatchId()?>">
				<input type="hidden" name="matchId" id="matchId" value=<?php echo $this->getMatchId()?> />
				<div class="form-group">
					<label class="control-label col-sm-4">Score <?php $match = $database -> getMatchById($this->getMatchId());echo $match->getTeamA()->getName() ?></label>
					<div class="controls col-sm-8">
						<div class="input-group">
							<span class="add-on input-group-addon"> <span class="glyphicon glyphicon-arrow-right"></span> </span>
							<input type="number" class="form-control input-xlarge" id="score1" name="score1" placeholder="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Score <?php $match = $database -> getMatchById($this->getMatchId());echo $match->getTeamB()->getName() ?></label>
					<div class="controls col-sm-8">
						<div class="input-group">
							<span class="add-on input-group-addon"> <span class="glyphicon glyphicon-arrow-right"></span> </span>
							<input type="number" class="form-control input-xlarge" id="score2" name="score2" placeholder="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4">Amount of money</label>
					<div class="controls col-sm-8">
						<div class="input-group">
							<span class="add-on input-group-addon"> <span class="glyphicon glyphicon-euro"></span> </span>
							<input type="number" class="form-control input-xlarge" id="money" name="money" placeholder="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-4"></label>
					<div class="controls col-sm-8">
						<button type="submit" class="btn btn-success" >
							Place
						</button>
	
					</div>
				</div>
			</form>
		</div>
	</div>
	
	
	<div class="col-md-6">
		
		
		<div class="panel panel-default">
		
			<div class="panel-heading">
				<h3 class="panel-title">Information</h3>
			</div>
			
			
			
			<div class="panel-body">
				
				
				<ul class="list-group">
					
					<li class="list-group-item">
						<?php  $match = $database -> getMatchById($this -> getMatchId());
						echo $match -> getTeamA() -> getName() . ' vs ' . $match -> getTeamB() -> getName();
 ?>
					</li>
					
					<li class="list-group-item">
						Date: <?php echo date('d-m-Y', $match -> getDate()); ?>
					</li>
					
					<li class="list-group-item">
						Prognose: 
						<?php $prognose = $match->getPrognose();
						echo $prognose[0] . '-' . $prognose[1]?>
					</li>
					
				</ul>
				
			</div>
		
		
		</div>
		
	</div>

	<?php
	}
	}
?>

</div>