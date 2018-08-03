<div class="container-fluid">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="marginTop100">
            <div class="mission-info-wrapper">
                <div class="mission-info-header">
                    <h3>MISSION INFORMATION</h3>
                </div>
                <div class="mission-info-body">
                    <div class="text-right" style="padding: 10px 30px;">
                        <a href="<?= URL ?>missions/addMission" class="btn btn-sm btn-success">Start New Mission</a>
                    </div>
                    <table class="table table-responsive">
                        <tr>
                            <th>Date of Mission</th>
                            <th>Place of Mission</th>
                            <th>Number of Souls Accepted Jesus</th>
                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                        <?php
                            foreach ($this->allMission as $mission){
                        ?>
                                <tr>
                                    <td><?= $mission->missionDate ?></td>
                                    <td><?= $mission->missionPlace ?></td>
                                    <td class="text-center"><?= $mission->missionNum ?></td>
                                    <td class="text-center"><a href="<?= URL ?>missions/countAccept?id=<?=$mission->id?>" class="btn btn-sm btn-primary">View</a></td>
                                    <td class="text-center"><a href="<?= URL ?>missions/deleteMission?id=<?=$mission->id?>" class="btn btn-sm btn-danger">Delete</a></td>
                                </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <br><br><br><br><br>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>