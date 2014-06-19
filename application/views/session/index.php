<script type="text/javascript">
    function DeleteSession(id){
        var x=window.confirm('Are you sure to delete this session?');
        
        if(x){
            $.post('<?php echo site_url(); ?>/session/delete',
            {
                id:id,
            },function(data){
                window.location.href='<?php echo site_url(); ?>/session/index';
            }
        )
        }else{
            return false;
        }
    }
    
    function EditSession(id){
        $('#hidden_id').val(id);
        $.post('<?php echo site_url(); ?>/session/edit',
            {
                id:id,
            },function(data){
                var res=data.split('^');
                $("#SessionFrom").val(res[1]);
                $("#SessionTo").val(res[2]);
                $("#Year").val(res[3]);
            }
        )
    }
</script>
<div class="thumbnail"> 
        <ol class="breadcrumb">
            <li class="active"><a href="<?php echo site_url('dashboard'); ?>">Dashboard </a></li>
            <li >Manage Session </li>
        </ol>
        
        <fieldset>
                <legend style="padding-left: 1%;">Manage Session</legend>
                <div class="row-fluid" >
                    <div class="alert alert-danger">
                    <?php echo validation_errors(); ?>
                    </div>
                    <?php echo form_open('') ?>
                    <div class="col-lg-3">
                        <input type="hidden" id="hidden_id" name="hidden_id">
                        <label for="SessionFrom">Session From</label>
                            <select name="SessionFrom" id="SessionFrom" class="form-control">
                                <option value="">Select Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="june">june</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                        <label for="SessionTo">Session To</label>
                            <select name="SessionTo" id="SessionTo" class="form-control">
                                <option value="">Select Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="june">june</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <label for="Year">Year</label>
                                <select name="Year" id="Year" class="form-control">
                                    <option value="">Select Year</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                </select>
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
                <th class="heading">Session</th>
                <th class="heading">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($session as $session_details):
                ?>
                <tr>
                    <td><?php echo $session_details['session']; ?></td>
                    <td>
                        <a href="javascript:void(0);" class="btn btn-success btn-sm" onclick="return EditSession(<?php echo $session_details['id']; ?>);"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm" onclick="return DeleteSession(<?php echo $session_details['id']; ?>);"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                <?php
                    endforeach
                ?>
            </tbody>
        </table>
    </div>
