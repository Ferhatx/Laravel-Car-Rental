@extends('layouts.admin')

@section('title', 'X Rent A Car Admin Panel')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"/>
@endsection

@section('js')
    <!-- include summernote css/js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#hakkimizda_editor').summernote(
                {
                    height: 300,   //set editable area's height
                    codemirror: { // codemirror options
                        theme: 'monokai'
                    }
                });
            $('#vizyon_editor').summernote({
                height: 300,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
            $('#misyon_editor').summernote({
                height: 300,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
            $('#kirasoz_editor').summernote({
                height: 300,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
            $('#kiralama_editor').summernote({
                height: 300,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
            $('#sss_editor').summernote({
                height: 300,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });

            $('#iletisim_editor').summernote({
                height: 300,   //set editable area's height
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
        });
    </script>
@endsection

@section("content")
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills" id="cardPill" role="tablist">

                <li class="nav-item"><a class="nav-link active" id="hakkimizda" href="#Hakkimizda" data-toggle="tab" role="tab" aria-controls="overview" aria-selected="true">Hakkımızda</a></li>
                <li class="nav-item"><a class="nav-link" id="vizyonumuz" href="#Vizyonumuz" data-toggle="tab" role="tab" aria-controls="example" aria-selected="false">Vizyonumuz</a></li>
                <li class="nav-item"><a class="nav-link" id="miyonumuz" href="#Misyonumuz" data-toggle="tab" role="tab" aria-controls="example" aria-selected="false">Misyonumuz</a></li>
                <li class="nav-item"><a class="nav-link" id="kira-sozlesmesi" href="#kira-Sozlesmesi" data-toggle="tab" role="tab" aria-controls="example" aria-selected="false">Kira Sözleşmesi</a></li>
                <li class="nav-item"><a class="nav-link" id="kiralama-kosullari" href="#kiralama-Kosullari" data-toggle="tab" role="tab" aria-controls="example" aria-selected="false">Kiralama Koşulları</a></li>
                <!--<li class="nav-item"><a class="nav-link" id="sikca_sorular" href="#sikca_Sorular" data-toggle="tab" role="tab" aria-controls="example" aria-selected="false">S.S.S</a></li>-->
                <li class="nav-item"><a class="nav-link" id="iletisim" href="#Iletisim" data-toggle="tab" role="tab" aria-controls="example" aria-selected="false">İletişim</a></li>


            </ul>
        </div>
        <div class="card-body">
            <form class="user" action="{{route('admin_page_update')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$data->id}}" class="form-control form-control-user" id="exampleFirstName" size="10" placeholder="Title" required />
                </div>
            <div class="tab-content" id="cardPillContent">
                <div class="tab-pane fade show active" id="Hakkimizda" role="tabpanel" aria-labelledby="hakkimizda">
                   <h5 class="card-title">Hakkımızda Güncelle</h5>
                    <textarea id="hakkimizda_editor" name="hakkimizda_icerik" >{{$data->hakkimizda}}</textarea>
                </div>


                <div class="tab-pane fade" id="Vizyonumuz" role="tabpanel" aria-labelledby="vizyonumuz">
                    <h5 class="card-title">Vizyonumuz Güncelle</h5>
                    <textarea id="vizyon_editor" name="vizyonumuz_icerik">{{$data->vizyonumuz}}</textarea>
                </div>

                <div class="tab-pane fade" id="Misyonumuz" role="tabpanel" aria-labelledby="misyonumuz">
                   <h5 class="card-title">Misyonumuz Güncelle</h5>
                    <textarea id="misyon_editor" name="misyonumuz_icerik">{{$data->misyonumuz}}</textarea>
                </div>

                <div class="tab-pane fade" id="kira-Sozlesmesi" role="tabpanel" aria-labelledby="kira-sozlesmesi">
                    <h5 class="card-title">Kira Sözleşmesi Güncelle</h5>
                    <textarea id="kirasoz_editor" name="kira_sozlesmesi_icerik">{{$data->kira_sozlesmesi}}</textarea>
                </div>

                <div class="tab-pane fade" id="kiralama-Kosullari" role="tabpanel" aria-labelledby="kiralama-kosullari">
                    <h5 class="card-title">Kirama Koşulları  Güncelle</h5>
                    <textarea id="kiralama_editor" name="kiralama_kosullari_icerik">{{$data->kiralama_kosullari}}</textarea>
                </div>
<!--
                <div class="tab-pane fade" id="sikca_Sorular" role="tabpanel" aria-labelledby="sikca_sorular">
                    <h5 class="card-title">Sıkça Sorulan Soruları Güncelle</h5>
                    <textarea id="sss_editor" name="sikca_sorulan_sorular_icerik">{{$data->sikca_sorulan_sorular}}</textarea>
                </div>
-->
                <div class="tab-pane fade" id="Iletisim" role="tabpanel" aria-labelledby="iletisim">
                    <h5 class="card-title">İletişim Güncelle</h5>
                    <textarea id="iletisim_editor" name="iletisim_icerik">{{$data->iletisim}}</textarea>
                </div>

            </div>
                <br/>
            <button class="btn btn-primary" type="submit">Güncelle</button>
            </form>
        </div>
    </div>


@endsection
