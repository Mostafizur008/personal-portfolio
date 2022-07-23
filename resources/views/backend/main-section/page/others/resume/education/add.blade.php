@extends('backend.main-section.body.main')
@section('main')

                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <div class="card-head">
                                                    <h5 class="card-title">Education Here</h5>
                                                </div>
                                                <form action="{{route('ed.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-4">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Type</label>
                                                                <div class="form-control-wrap">
                                                                    <select name="type" id="mbs"  class="form-select js-select2" data-placeholder="Select a option" required>
                                                                        <option selected disabled>Chose Type</option>
                                                                        <option value="SSC">SSC</option>
                                                                        <option value="HSc">HSc</option>
                                                                        <option value="0">Graduation</option>
                                                                        <option value="Post Graduaction">Post Graduaction</option>
                                                                    </select>
                                                                    <input type="text" name="grad" id="grad" class="form-control form-control-sm  grad" placeholder="Graduaction" style="display: none;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Institution</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="name" name="name" class="form-control" placeholder="Institution Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Description</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="description" name="description" class="form-control" placeholder="Description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Passing Year</label>
                                                                <div class="form-control-wrap">
                                                                    <select name="sdate"  class="form-select js-select2" data-placeholder="Select a option" required>
                                                                        <option selected disabled>Chose Option</option>
                                                                        <option value="1980">1980</option>
                                                                        <option value="1981">1981</option>
                                                                        <option value="1982">1982</option>
                                                                        <option value="1983">1983</option>
                                                                        <option value="1984">1985</option>
                                                                        <option value="1986">1986</option>
                                                                        <option value="1987">1987</option>
                                                                        <option value="1988">1988</option>
                                                                        <option value="1989">1989</option>
                                                                        <option value="1990">1990</option>
                                                                        <option value="1991">1991</option>
                                                                        <option value="1992">1992</option>
                                                                        <option value="1993">1993</option>
                                                                        <option value="1994">1994</option>
                                                                        <option value="1995">1995</option>
                                                                        <option value="1996">1996</option>
                                                                        <option value="1997">1997</option>
                                                                        <option value="1998">1998</option>
                                                                        <option value="1999">1999</option>
                                                                        <option value="2000">2000</option>
                                                                        <option value="2001">2001</option>
                                                                        <option value="2002">2002</option>
                                                                        <option value="2003">2003</option>
                                                                        <option value="2004">2004</option>
                                                                        <option value="2005">2005</option>
                                                                        <option value="2006">2006</option>
                                                                        <option value="2007">2007</option>
                                                                        <option value="2008">2008</option>
                                                                        <option value="2009">2009</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2011">2011</option>
                                                                        <option value="2012">2012</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2015">2015</option>
                                                                        <option value="2016">2016</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2022">2022</option>
                                                                </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Grade Point</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="point" name="point" class="form-control" placeholder="Example : GPA or CGPA - 5.0">
                                                                </div>
                                                                <div class="form-note">Typing Formate : <code>GPA - 5.00</code></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12" align="right">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                                            </div>
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
                </div>

    <script type="text/javascript">
        $(document).on('change','#mbs',function(){
        var mbs = $(this).val();
          if(mbs == '0'){
            $('.grad').show();
          }else{
            $('.grad').hide();
          }
        });
    </script>

@endsection