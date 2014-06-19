<script type="text/javascript">
    function DeleteProgram(id){
        var x=window.confirm('Are you sure to delete this program?');
        
        if(x){
            $.post('<?php echo site_url('program/delete'); ?>',
            {
                id:id,
            },function(data){
                window.location.href='<?php echo site_url('program/index'); ?>';
            }
        )
        }else{
            return false;
        }
    }
    
    function EditProgram(id){
        $('#hidden_id').val(id);
        $.post('<?php echo site_url('program/edit'); ?>',
            {
                id:id,
            },function(data){
                var res=data.split('^');
                $("#University").val(res[1]);
                $("#ProgramName").val(res[2]);
            }
        )
    }
</script>
<div class="thumbnail"> 
        <ol class="breadcrumb">
            <li class="active"><a href="<?php echo site_url('dashboard'); ?>">Dashboard </a></li>
            <li >Manage Program </li>
        </ol>
        
        <fieldset>
                <legend style="padding-left: 1%;">Manage Program</legend>
                <div class="row-fluid" >
                    <div class="alert alert-danger">
                    <?php echo validation_errors(); ?>
                    </div>
                    <?php echo form_open('') ?>
                        <div class="col-lg-3">
                            <input type="hidden" id="hidden_id" name="hidden_id">
                            <label for="University">University</label>
                            <select name="University" id="University" class="form-control">
                                <option value="">Select University</option>
                                <?php foreach ($university as $university_list): ?>
                                <option value="<?php echo $university_list['university_code'] ?>"><?php echo $university_list['university_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="ProgramName">Program Name</label>
                            <input type="text" name="ProgramName" id="ProgramName" class="form-control" value="<?php echo set_value('ProgramName') ?>">
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
                <th class="heading">University</th>
                <th class="heading">Program Name</th>
                <th class="heading">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($program as $program_details):
                ?>
                <tr>
                    <td><?php echo $program_details['university']; ?></td>
                    <td><?php echo $program_details['program_name']; ?></td>
                    <td>
                        <a href="javascript:void(0);" class="btn btn-success btn-sm" onclick="return EditProgram(<?php echo $program_details['id']; ?>);"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm" onclick="return DeleteProgram(<?php echo $program_details['id']; ?>);"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <?php
                    endforeach
                ?>
            </tbody>
        </table>
    </div>
