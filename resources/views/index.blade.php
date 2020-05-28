@extends('layout')

@section('pdf.index')
    <x-alert/>
    {{--  From for upload --}}
    <div class="container">

        <div class="row justify-content-center mt-5">

            <div class="col-6">

                <form action="/" method="post" enctype="multipart/form-data">
                    @csrf

                    <label for="file"> Attach file </label>
                    <input class="file-upload" name="file" id="file" type="file">
                    <input class="btn btn-success" type="submit">

                </form>

            </div>


        </div>


    </div>


    <div class="container">

        {{-- List --}}


    <div class="row ">
@foreach($pdfs as $pdf)

    <div class="col-3">

        <a href="{{'storage/documents/'. $pdf->pdf_file}}"   >


            <img  src="{{'storage/images/'.$pdf->pdf_image.'.jpeg'}}"  class="m-2 w-75 d-inline img-thumbnail">


        </a>

    </div>



@endforeach
    </div>

            {{--  Pagination  --}}

            <div class="mt-5 row justify-content-center">
                {{$pdfs->links()}}
            </div>


    </div>



    <style>
        .file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }

        .file-upload:hover {
            background: #1d68a7;users
        color: white;
        }
    </style>
@endsection
