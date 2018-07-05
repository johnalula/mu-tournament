<div class="row">
	<div class="col-sm-12">
		 <div class="row" style="margin-left: 0px;margin-right: 0px;border-bottom: 1px solid #6f6d7d;padding-top: 20px;">
				<div class="col-sm-12 table-header">
					<h2 style="">
						<span style="color:#fcb931"> <?php echo TournamentCore::makeGroupName($_matchFixtureGroup->matchFixtureGroupNumber).' - '.$_matchFixtureGroup->matchFixtureHeatName.' - '.date('d M Y',strtotime($_matchFixtureGroup->matchDate)).' - '.$_matchFixtureGroup->matchTime ?></span>
					</h2>
				</div>
			</div>
		<div class="tab-content">
			<div class="tab-pane active" id="home">
				<div class="">
					<div class="panel-title">
						<h4><a><?php echo TournamentCore::processTournamentSessionModeValue ($_matchFixtureGroup->matchFixtureGroupSessionMode ) ?></a></h4>
					</div>
				</div>
				<div class="col-sm-12">
					<?php if($_matchFixtureGroup->matchContestantTeamMode == TournamentCore::$_PAIR_TEAM): ?>
					<?php include_partial('pair_participant_list', array('_tournamentMatchFixtureParticipants' => $_tournamentMatchFixtureParticipants)) ?>
					<?php else: ?>
					<?php include_partial('participant_list', array('_tournamentMatchFixtureParticipants' => $_tournamentMatchFixtureParticipants)) ?>
					<?php endif; ?>
				</div><!-- /.col-sm -->
			</div>
			<div class="tab-pane" id="profile">...</div>
			<div class="tab-pane" id="messages">...</div>
			<div class="tab-pane" id="settings">...</div>
		</div>
	</div>
</div><!-- /.row -->
		
<br>
<br>
<br>
<br>
<br>
		
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
