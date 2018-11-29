@extends('layouts.app')

@section('content')
<div class="panel-body">
    <!-- Display Validation Errors -->

    <!-- New Task Form -->
    <form action="/viewusers" method="POST" name="searchForm" class="form-horizontal">
        {{ csrf_field() }}
        <div class="col-sm-6">
            <!-- Task Title -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">First Name</label>

                <div class="col-sm-4">
                    <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $fname;?>">
                </div>
            </div>

            <!-- Task Title -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Last Name</label>

                <div class="col-sm-4">
                    <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $lname;?>">
                </div>
            </div>

            <!-- Task Assign -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Mobile Number</label>

                <div class="col-sm-4">
                    <input type="text" name="mobile_number" id="mobile_number" class="form-control" 
                           value="<?php echo $mobileNumber;?>">
                </div>
            </div>
        </div>

        
        <div class="col-sm-6">
            <!--Will process date fields later...Rituraj 2-Aug-2018
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Created At</label>

                <div class="col-sm-3">
                    <input type="text" name="createdAt" id="createdAt" readonly class="form-control" 
                           value = "<?php echo $createdAt;?>">
                </div>
                <div class="col-sm-3">
                    <img id="calendar_icon" src="/jscal/samples/dhtmlxCalendar/common/calendar.png" border="0">
                    &nbsp;<a href="javascript:void(0);" onclick="javascript:document.getElementById('createdAt').value = '';">Clear</a>
                </div>
            </div>

            

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Updated At</label>

                <div class="col-sm-3">
                    <input type="text" name="updatedAt" id="updatedAt" readonly class="form-control" 
                           value="<?php echo $updatedAt;?>">
                </div>
                <div class="col-sm-3">
                    <img id="calendar_icon_updatedAt" src="/jscal/samples/dhtmlxCalendar/common/calendar.png" border="0">
                    &nbsp;<a href="javascript:void(0);" onclick="javascript:document.getElementById('updatedAt').value = '';">Clear</a>
                    <script language="javascript" type="text/javascript">
                        var myCalendar;
                        function doOnLoad() {
                            myCalendarDueDate = new dhtmlXCalendarObject({input: "createdAt", button: "calendar_icon"});
                            myCalendarCreatedTo = new dhtmlXCalendarObject({input: "updatedAt", button: "calendar_icon_updatedAt"});
                        }
                        doOnLoad();
                    </script>
                </div>
            </div>-->
            
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Email</label>

                <div class="col-sm-4">
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email;?>">
                </div>
            </div>
            
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Role</label>
                <div class="col-sm-4">
                    <select name='role' id='role' class="form-control">
                        <?php
                            echo $selectOptionsManager->showSelectOptions($roleList, $role);
                        ?>
                    </select>
                    @if ($errors->has('role'))
                    <span class="help-block">
                        <strong>{{ $errors->first('role') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Status</label>
                <div class="col-sm-4">
                    <select name='status' id='status' class="form-control">
                        <?php
                            echo $selectOptionsManager->showSelectOptions(['Enabled' => 'Enabled', 'Disabled' => 'Disabled'], 
                                    $status);
                        ?>
                    </select>
                    @if ($errors->has('status'))
                    <span class="help-block">
                        <strong>{{ $errors->first('status') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-6">
                <button type="submit" class="btn btn-default" style="width: 190px;">
                    <i class="fa fa-plus"></i> <strong>Search Users</strong>
                </button>
                <button type="button" class="btn btn-default" style="width: 190px;"
                        onclick="javascript:document.location.href='/viewusers';">
                    <i class="fa fa-plus"></i> <strong>Clear Search</strong>
                </button>
            </div>
        </div>
    </form>
</div>
@include('errors.common')
<div class="container" style="width:100%;">
    <div class="row"><!--style="width: 1500px;"-->
        <div class="col-md-30">
            <div class="alert alert-success">
                <table width="100%" align="center" border = "1" style="border-collapse:separate;border-spacing:2px;" 
                rules = "none" cellspacing="2" cellpadding="4" rules="1">
                    <tr>
                        <td colspan="8" align="center" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                            <h1>User List</h1>
                        </td>
                    </tr>
                    <tr style="background-color:white">
                        <td width="2%" align="center">
                            <strong>S.No.</strong>
                        </td>
                        <td width="14%">
                            <strong>Name</strong>
                        </td>
                        <td width="14%">
                            <strong>Mobile Number</strong>
                        </td>
                        <td width="14%">
                            <strong>Email</strong>
                        </td>
                        <td width="14%">
                            <strong>Created At</strong>
                        </td>
                        <td width="14%">
                            <strong>Updated At</strong>
                        </td>
                        <td width="14%">
                            <strong>Role</strong>
                        </td>
                        <td width="14%">
                            <strong>Status</strong>
                        </td>
                    </tr>
                    <?php
                        if (!count($userList)) {
                    ?>
                            <tr>
                                <td colspan="8" width="100%" align="center">
                                    No Users found
                                </td>
                            </tr>
                    <?php
                        } else {
                            
                            /*echo '<br>Userlist : <pre>' . print_r($userList, true) . '</pre>';
                            $userListData = $userList->items;
                            echo '<br>userListData : <pre>' . print_r($userListData, true) . '</pre>';*/
                            
                            $i = 1;
                            
                            if (!empty($_REQUEST['page'])) {
                                $i = (($_REQUEST['page']-1) * env('RECORDS_PER_PAGE')) + 1;
                            }
                            
                            foreach ($userList as $row) {
                                
                                $row = $row->getAttributes();
                                
                                //echo '<br>Row : <pre>' . print_r($row, true) . '</pre>';
                    ?>          
                                <tr>
                                    <td style="text-align: center;" valign="middle">
                                        <strong><?php echo $i++;?>.</strong>
                                    </td>
                                    <td>
                                        <a href="/edituser/<?php echo $row['pk_admin_user_id'];?>" 
                                           title="Click here to edit this user" target="_blank">
                                            <?php echo $row['fname'] . ' ' . $row['lname'];?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $row['mobile_number'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['email'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['created_at'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['updated_at'];?>
                                    </td>
                                    <td>
                                        <?php echo $roleList[$row['fk_admin_role_id']];?>
                                    </td>
                                    <td>
                                        <?php echo $row['status'];?>
                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    ?>
                    
                    <tr>
                        <td colspan="8" align="center">
                            <?php
                                if (!empty($userList)) {
                                    echo $userList->appends($_REQUEST)->links();
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection