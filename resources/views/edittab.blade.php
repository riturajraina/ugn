@extends('layouts.app')
@section('content')
@include('errors.register')

<?php
    //$pageTitle = urldecode($pageTitle);
    require_once(env('VIEWSPATH') .  'rtecodeinclude.php');
?>

<!--<div class="container" style="width:150%;align-content:left;padding-left:0px;float:left;position: absolute;">-->
<div class="container" style="align-content:left;">
    <div class="row">
        <!--<div class="col-md-8 col-md-offset-2">-->
        <div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Edit Tab</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/edittab') }}">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="pageId" id="pageId" value="<?php echo $pageId;?>">
                        
                        <input type="hidden" name="tabId" id="tabId" value="<?php echo $tabId;?>">
                        
                        <input type="hidden" name="pageTitle" id="pageTitle" value="<?php echo $pageTitle;?>">
                        
                        <div class="form-group{{ $errors->has('pageTitle') ? ' has-error' : '' }}">
                            <label for="pageTitle" class="col-md-3 control-label">Page Title</label>

                            <div class="col-md-6">
                                <?php
                                    echo urldecode($pageTitle);
                                ?>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('tabTitle') ? ' has-error' : '' }}">
                            <label for="tabTitle" class="col-md-3 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="tabTitle" type="text" class="form-control" name="tabTitle" 
                                value="<?php echo (!empty(Input::old('tabTitle')) ? Input::old('tabTitle') : 
                                    $tabDetails['title']);?>"
                                required autofocus maxlength="50">

                                @if ($errors->has('tabTitle'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tabTitle') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('paragraph') ? ' has-error' : '' }}">
                            <label for="paragraph" class="col-md-3 control-label">Paragraph</label>

                            <div class="col-md-6" style="width:75%">
                                
                                <textarea id="paragraph" type="text" class="<?php echo $textAreaClass;?>" name="paragraph"
                                autofocus maxlength="255" rows="30"><?php 
                                    echo stripslashes(!empty(Input::old('paragraph')) ? Input::old('paragraph') : 
                                         (!empty($tabDetails['paragraph']) ? $tabDetails['paragraph'] : ''));
                                ?></textarea>

                                @if ($errors->has('paragraph'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('paragraph') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-3 control-label">Status</label>

                            <div class="col-md-6">
                                <select required name = 'status' id = 'status' class="form-control">
                                    <?php
                                        $statusList = ['Enabled' => 'Enabled', 'Disabled' => 'Disabled'];
                                        
                                        $status = !empty(Input::old('status')) ? Input::old('status') 
                                                  : $tabDetails['status']; 
                                        
                                        echo $selectOptionsManager->showSelectOptions($statusList, $status, false);
                                    ?>
                                </select>
                                
                                @if ($errors->has('status'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Update Tab
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
