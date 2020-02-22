

<style>

    .btn_makeRequest_loader {
    
    cursor: pointer;
    }
    .btn_makeRequest_loader:disabled {
    opacity: 0.5;
    }
    

    
        .btn_approve_loader {
    
          cursor: pointer;
        }
        .btn_approve_loader:disabled {
          opacity: 0.5;
        }
    
    


    
        .btn_deny_loader {
    
    cursor: pointer;
    }
    .btn_deny_loader:disabled {
    opacity: 0.5;
    }

    
    
        .hide {
          display: none;
        }
      </style>
    
        <section class="content-header">
    
            <h4>    View  {!! $corpse->cr_no !!}    Corpse Detail
    
        
    
        @hasrole('SuperAdmin|Admin')
        <div class="pull-right">
            <button class="btn btn-primary btn-sm ShowModal">Add Task</button>&ensp;
            {{-- <button class="btn btn-default btn-sm" id="printbutton" onclick="window.print();" ><i class="fa fa-print" aria-hidden="true"></i> Print with task  </button>&ensp; --}}
            <button class="btn btn-success btn-sm"   onclick="print_div();" ><i class="fa fa-print" aria-hidden="true"></i>  Print </button>&ensp;
        @endrole
                @if ( $corpse->pauper_burial_approved == 'No-Request'||$corpse->pauper_burial_approved == 'No')
                    @hasrole('SuperAdmin|Admin|writer') 
                    <button  onclick="makeRequest();"  class=" btn btn-info btn-sm  pull-right    small-box-footer    btn_makeRequest_loader">
                        <i class="btn_makeRequest_loader-icon fa fa-spinner fa-spin hide"></i>
                        <span class="btn_makeRequest_loader-txt"><i class="fa fa-save" aria-hidden="true"></i> Make Request</span>
                      </button>
    
                    @endrole
               @endif
               @if ( $corpse->pauper_burial_approved == 'Processing')
               @hasrole('SuperAdmin') 
               <button   onclick="approved({!!$corpse->id!!});" class=" btn btn-info btn-sm    small-box-footer    btn_approve_loader">
                <i class="loading-icon fa fa-spinner fa-spin hide"></i>
                <span class="btn-txt"><i class="fa fa-save" aria-hidden="true"> </i>  Approve</span>
              </button>&ensp;
    
               <button href="#" onclick="deny({!!$corpse->id!!});" class='btn   btn-danger btn-sm pull-right'> Deny </button>
               @endrole
          @endif
    
        </div>
    
    
            </h4>
    
        </section>
        <div class="content">
            <div class="box box-primary">
                <div class="box-body">
                    <span class='approveSuccess'> </span>
                    <div class="output"></div>

                 <h1 style="color:#1E90FF">
                    <div class=" large-box-footer    btn_deny_loader">
                        <i class="btn_deny_loader-icon fa fa-spinner fa-spin hide"></i>
                        <span class="btn_deny_loader-txt">   </span>
                    </div>
                </h1>


                <h1 style="color:#1E90FF">
                  <div class=" large-box-footer    btn_makeRequest_loader">
                      <i class="btn_makeRequest_loader-icon fa fa-spinner fa-spin hide"></i>
                      <span class="btn_makeRequest_loader-txt">   </span>
                  </div>
              </h1>
              

                <h1 style="color:#1E90FF">
                  <div class=" large-box-footer    btn_approve_loader">
                      <i class="loading-icon fa fa-spinner fa-spin hide"></i>
                      <span class="btn-txt">   </span>
                  </div>
              </h1>
              

              
                    <div class="row" style="padding-left: 20px">
    
                        @include('corpses.show_fields')
    
                        <div class="output"></div>
                        <hr>
                        <h3 style="color:cadetblue">You Have received <b>Task</b> from Admin </h3>
                        <hr>
    
                        <div class="pull-left " id="getTask"> </div>
                    </div>
    
    
                </div>
    
            </div>
        </div>
    
    
    
    