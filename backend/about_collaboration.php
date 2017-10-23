<?php $Collaboration = getCollaboration(); ?>
                 <form class="form-horizontal" method="POST" action="inc/about_process.php">
                 <?php foreach($Collaboration as $getCollaborationList){ ?>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Summary</label>
                            <div class="col-sm-10">
                             <textarea name="summary" id="collaboration_summary" class="form-control" rows="3" style="resize:vertical;" ><?php echo html_entity_decode($getCollaborationList['summary']); ?></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-6">
                             <input type="hidden" name="page" id="page" value="collaboration" class="form-control">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                             <textarea name="description" id="collaboration_description" class="form-control" rows="7" style="resize:vertical;"><?php echo html_entity_decode($getCollaborationList['description']); ?></textarea>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-6">
                              <button type="submit" class="btn btn-success">Update</button>
                            </div>
                          </div>
                          <?php
                             }
                              ?>
                    </form>