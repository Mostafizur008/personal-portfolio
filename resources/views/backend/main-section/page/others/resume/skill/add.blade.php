@extends('backend.main-section.body.main')
@section('main')

                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <form action="{{route('sk.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mrs">
                                                    <div class="row g-2">
                                                        <h6>CODING SKILLS</h6>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="name[]" name="name[]" class="form-control" placeholder="Skill Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Parsent</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="parsent[]" name="parsent[]" class="form-control" placeholder="Parsent">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1" style="padding-top: 33px;"> 
                                                            <div class="form-group">
                                                               <span class="btn btn-sm  btn-primary addeventmore"><i class="icon ni ni-plus"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div><br/><br/>
                                                 <div class="mrs1">
                                                    <div class="row g-2">
                                                        <h6>DESIGN SKILLS</h6>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="dname[]" name="dname[]" class="form-control" placeholder="Skill Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Parsent</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="dparsent[]" name="dparsent[]" class="form-control" placeholder="Parsent">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1" style="padding-top: 33px;"> 
                                                            <div class="form-group">
                                                               <span class="btn btn-sm  btn-primary addeventmore1"><i class="icon ni ni-plus"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div><br/><br/>
                                                 <div class="mrs2">
                                                    <div class="row g-2">
                                                        <h6>LENGUAGE SKILLS</h6>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="lname[]" name="lname[]" class="form-control" placeholder="Skill Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Parsent</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="lparsent[]" name="lparsent[]" class="form-control" placeholder="Parsent">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1" style="padding-top: 33px;"> 
                                                            <div class="form-group">
                                                               <span class="btn btn-sm  btn-primary addeventmore2"><i class="icon ni ni-plus"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div><br/><br/>
                                                 <div class="mrs3">
                                                    <div class="row g-2">
                                                        <h6>BASIC KNOWLEGE</h6>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="bname[]" name="bname[]" class="form-control" placeholder="Basic Knowledge">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1" style="padding-top: 33px;"> 
                                                            <div class="form-group">
                                                               <span class="btn btn-sm  btn-primary addeventmore3"><i class="icon ni ni-plus"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                 </div><br/>
                                                    <div class="col-12" align="right">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>

                <div style="visibility: hidden;">
                    <div class="whole_extra_item_add" id="whole_extra_item_add">
                        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                            <div class="row g-3">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="name[]" name="name[]" class="form-control" placeholder="Skill Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label">Parsent</label>
                                        <div class="form-control-wrap">
                                            <input type="parsent[]" name="parsent[]" class="form-control" placeholder="Parsent">
                                        </div>
                                    </div>
                                </div>
                
                                <div class="col-lg-1" style="padding-top: 33px">     
                                    <span class="btn btn-sm btn-danger removeeventmore"><i class="icon ni ni-minus" aria-hidden="true"></i></span>
                               </div>
                           
                            </div>   
                        </div>
                    </div>
                </div>

                <div style="visibility: hidden;">
                    <div class="whole_extra_item_add1" id="whole_extra_item_add1">
                        <div class="delete_whole_extra_item_add1" id="delete_whole_extra_item_add1">
                            <div class="row g-3">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="dname[]" name="dname[]" class="form-control" placeholder="Skill Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label">Parsent</label>
                                        <div class="form-control-wrap">
                                            <input type="dparsent[]" name="dparsent[]" class="form-control" placeholder="Parsent">
                                        </div>
                                    </div>
                                </div>
                
                                <div class="col-lg-1" style="padding-top: 33px">     
                                    <span class="btn btn-sm btn-danger removeeventmore1"><i class="icon ni ni-minus" aria-hidden="true"></i></span>
                               </div>
                           
                            </div>   
                        </div>
                    </div>
                </div>

                <div style="visibility: hidden;">
                    <div class="whole_extra_item_add2" id="whole_extra_item_add2">
                        <div class="delete_whole_extra_item_add2" id="delete_whole_extra_item_add2">
                            <div class="row g-3">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="lname[]" name="lname[]" class="form-control" placeholder="Skill Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label">Parsent</label>
                                        <div class="form-control-wrap">
                                            <input type="lparsent[]" name="lparsent[]" class="form-control" placeholder="Parsent">
                                        </div>
                                    </div>
                                </div>
                
                                <div class="col-lg-1" style="padding-top: 33px">     
                                    <span class="btn btn-sm btn-danger removeeventmore2"><i class="icon ni ni-minus" aria-hidden="true"></i></span>
                               </div>
                           
                            </div>   
                        </div>
                    </div>
                </div>

                <div style="visibility: hidden;">
                    <div class="whole_extra_item_add3" id="whole_extra_item_add3">
                        <div class="delete_whole_extra_item_add3" id="delete_whole_extra_item_add3">
                            <div class="row g-3">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="bname[]" name="bname[]" class="form-control" placeholder="Basic Knowledge">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1" style="padding-top: 33px">     
                                    <span class="btn btn-sm btn-danger removeeventmore3"><i class="icon ni ni-minus" aria-hidden="true"></i></span>
                               </div>
                           
                            </div>   
                        </div>
                    </div>
                </div>


     <script>
        $(document).ready(function(){
             var counter = 0;
               $(document).on("click",'.addeventmore',function(){
                 var whole_extra_item_add = $('#whole_extra_item_add').html();
                  $(this).closest(".mrs").append(whole_extra_item_add);
                     counter ++;
         });

                      $(document).on("click",'.removeeventmore',function(event){
                        $(this).closest(".delete_whole_extra_item_add").remove();
                          counter -=1
        });
      });

      $(document).ready(function(){
             var counter = 0;
               $(document).on("click",'.addeventmore1',function(){
                 var whole_extra_item_add1 = $('#whole_extra_item_add1').html();
                  $(this).closest(".mrs1").append(whole_extra_item_add1);
                     counter ++;
         });

                      $(document).on("click",'.removeeventmore1',function(event){
                        $(this).closest(".delete_whole_extra_item_add1").remove();
                          counter -=1
        });
      });

      $(document).ready(function(){
             var counter = 0;
               $(document).on("click",'.addeventmore2',function(){
                 var whole_extra_item_add2 = $('#whole_extra_item_add2').html();
                  $(this).closest(".mrs2").append(whole_extra_item_add2);
                     counter ++;
         });

                      $(document).on("click",'.removeeventmore2',function(event){
                        $(this).closest(".delete_whole_extra_item_add2").remove();
                          counter -=1
        });
      });

      $(document).ready(function(){
             var counter = 0;
               $(document).on("click",'.addeventmore3',function(){
                 var whole_extra_item_add3 = $('#whole_extra_item_add3').html();
                  $(this).closest(".mrs3").append(whole_extra_item_add3);
                     counter ++;
         });

                      $(document).on("click",'.removeeventmore3',function(event){
                        $(this).closest(".delete_whole_extra_item_add3").remove();
                          counter -=1
        });
      });

     </script>


@endsection