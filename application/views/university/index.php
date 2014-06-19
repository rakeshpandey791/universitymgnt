<script type="text/javascript">
    function DeleteUniversity(id){
        var x=window.confirm('Are you sure to delete this university?');
        
        if(x){
            $.post('<?php echo site_url('university/delete'); ?>',
            {
                id:id,
            },function(data){
                window.location.href='<?php echo site_url('university/index'); ?>';
            }
        )
        }else{
            return false;
        }
    }
    
    function EditSession(id){
        $('#hidden_id').val(id);
        $.post('<?php echo site_url('university/edit'); ?>',
            {
                id:id,
            },function(data){
                var res=data.split('^');
                $("#UniversityName").val(res[1]);
                $("#UniversityCode").val(res[2]);
            }
        )
    }
</script>
<div class="thumbnail"> 
        <ol class="breadcrumb">
            <li class="active"><a href="<?php echo site_url('dashboard'); ?>">Dashboard </a></li>
            <li >Manage University </li>
        </ol>
        
        <fieldset>
                <legend style="padding-left: 1%;">Manage University</legend>
                <div class="row-fluid" >
                    <div class="alert alert-danger">
                    <?php echo validation_errors(); ?>
                    </div>
                    <?php echo form_open('') ?>
                        <div class="col-lg-3">
                            <input type="hidden" id="hidden_id" name="hidden_id">
                            <label for="UniversityName">University Name</label>
                            <input type="text" name="UniversityName" id="UniversityName" class="form-control" value="<?php echo set_value('UniversityName') ?>">
                        </div>
                        <div class="col-lg-3">
                            <label for="UniversityCode">University Code</label>
                            <input type="text" name="UniversityCode" id="UniversityCode" class="form-control" value="<?php echo set_value('UniversityCode') ?>">
                        </div>
                        
                        <div class="col-lg-3">
                            <label>&nbsp;</label>
                            <input type="submit" name="Save" id="Save" value="Save" class="btn btn-danger btn-block">
                        </div>
                </form>
                </div>
                
            </fieldset>
            <table class="table table-bordered table-responsive table-hover"  style="margin-top: 4%;margin-bottom: 12%;">
            <thead>
                <tr>
                <th class="heading">University Name</th>
                <th class="heading">University Code</th>
                <th class="heading">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($university as $university_details):
                ?>
                <tr>
                    <td><?php echo $university_details['university_name']; ?></td>
                    <td><?php echo $university_details['university_code']; ?></td>
                    <td>
                        <a href="javascript:void(0);" class="btn btn-success btn-sm" onclick="return EditSession(<?php echo $university_details['id']; ?>);"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm" onclick="return DeleteUniversity(<?php echo $university_details['id']; ?>);"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <?php
                    endforeach
                ?>
            </tbody>
        </table>
    </div>
