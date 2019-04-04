@extends('layouts.app')
@section('content')
@include('errors.register')

<?php
    require_once(env('VIEWSPATH') .  'rtecodeinclude.php');
?>

<!--<div class="container" style="width:150%;align-content:left;padding-left:0px;float:left;position: absolute;">-->
<div class="container" style="align-content:left;">
    <div class="row">
        <!--<div class="col-md-8 col-md-offset-2">-->
        <div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #2579A9;text-align: center;color:#E2FFFF">
                    <strong>Edit Accordion</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/editaccordion') }}">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="pageId" id="pageId" value="<?php echo $pageId;?>">
                        
                        <input type="hidden" name="tabId" id="tabId" value="<?php echo $tabId;?>">
                        
                        <input type="hidden" name="accordionId" id="accordionId" value="<?php echo $accordionId;?>">
                        
                        <input type="hidden" name="tabTitle" id="tabTitle" value="<?php echo $tabTitle;?>">
                        
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
                            <label for="tabTitle" class="col-md-3 control-label">Tab Title</label>

                            <div class="col-md-6">
                                <?php
                                    echo urldecode($tabTitle);
                                ?>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('accordionTitle') ? ' has-error' : '' }}">
                            <label for="accordionTitle" class="col-md-3 control-label">Accordion Title</label>

                            <div class="col-md-6">
                                <input id="accordionTitle" type="text" class="form-control" name="accordionTitle" 
                                value="<?php echo (!empty(Input::old('accordionTitle')) ? 
                                        Input::old('accordionTitle') : 
                                        (!empty($accordionDetails['title']) ? $accordionDetails['title'] : ''));?>"
                                autofocus maxlength="255">

                                @if ($errors->has('accordionTitle'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('accordionTitle') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group">
                            <label for="hideAccordion" class="col-md-3 control-label">Hide Accordion Title</label>

                            <div class="col-md-1">
                             <input id="hideAccordion" type="checkbox" class="form-control" name="hideAccordion" value="1" <?php if($accordionDetails['show_type'] == 1){ echo 'checked';}?>>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('paragraph') ? ' has-error' : '' }}">
                            <label for="paragraph" class="col-md-3 control-label">Paragraph</label>

                            <div class="col-md-6" style="width:75%">
                                
                                <textarea id="paragraph" type="text" class="<?php echo $textAreaClass;?>" name="paragraph"
                                autofocus maxlength="255" rows="30"><?php 
                                    echo stripslashes(!empty(Input::old('paragraph')) ? Input::old('paragraph') : 
                                        $accordionDetails['paragraph']);
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
                                                  : $accordionDetails['status']; 
                                        
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
                                    Edit Accordion
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
