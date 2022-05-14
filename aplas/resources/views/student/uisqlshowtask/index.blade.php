@extends('student/home')
@section('script')
    {{-- <script src="{{ URL::to('/js/sql_code_textarea.js') }}"></script> --}}
    <!-- Code Mirror Script & CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.2/codemirror.min.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/theme/dracula.min.css"
        integrity="sha512-gFMl3u9d0xt3WR8ZeW05MWm3yZ+ZfgsBVXLSOiFz2xeVrZ8Neg0+V1kkRIo9LikyA/T9HuS91kDfc2XWse0K0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://codemirror.net/lib/codemirror.css">
    <link rel="stylesheet" href="http://codemirror.net/addon/hint/show-hint.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.2/codemirror.min.js"></script>
    <script src="http://codemirror.net/lib/codemirror.js"></script>
    <script src="http://codemirror.net/addon/edit/matchbrackets.js"></script>
    <script src="http://codemirror.net/addon/edit/continuecomment.js"></script>
    <script src="http://codemirror.net/mode/sql/sql.js"></script>
    <script src="http://codemirror.net/addon/hint/show-hint.js"></script>
    <script src="http://codemirror.net/addon/hint/sql-hint.js"></script>
    <!-- Code Mirror Script & CSS -->
@endsection
@section('content')
    <div class="container">
        <div class="row mt-3" style="position: relative;">
            <div class="col-md-12">
                <button class="btn btn-primary">
                    <i class="fas fa-angle-left"></i> Previous</button>
                <button class="btn btn-primary" style="position: absolute; right: 10px;">
                    Next <i class="fas fa-angle-right"></i></button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <h1>Pembelajaran</h1>
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Task</th>
                            <th scope="col">Description</th>
                            <th scope="col">Score</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row justity-content-center mt-3">

            <div class="col-md-5" style="margin-top: 3.5%">
                {{-- <textarea name="textareasql" id="textareasql" cols="30" rows="10"></textarea> --}}

                <div class="field">
                    <fieldset class="form-group">
                        <textarea name="textareasql" id="textareasql" rows="4" class="text-capitalize round form-control"
                            placeholder="code sql"></textarea>
                    </fieldset>
                    <div>
                        <button type="button" onclick="_onClick()" class="btn btn-success"><i class='fas fa-play'></i> Run</button>
                        <button id="submitButton" class="btn btn-outline-primary"><i class="fas fa-check"></i>
                            Submit</button>
                    </div>
                </div>
                <div style="margin-top: 1%">
                    <h2>Result</h2>
                    <div>
                        <button id="clearResult" class="btn btn-danger" style="position: relative;left:68%">
                            <i class='fas fa-trash'></i> Clear
                        </button>
                    </div>
                    <textarea name="result" id="result" cols="50" rows="10"></textarea>
                </div>
                <div class="button-box mt-2" style="position: absolute; right: 10px;">
                </div>
            </div>
            <div class="col-md-7" style="position: relative;">
                <embed src="{{ asset('lte/dist/file/modul.pdf') }}" type="application/pdf"
                    style="width: 100%; height: 100%;">
            </div>
        </div>
        <div class="row mt-3" style="position: relative;">
            <div class="col-md-12">
                <button class="btn btn-primary">
                    <i class="fas fa-angle-left"></i> Previous</button>
                <button class="btn btn-primary">
                    Next <i class="fas fa-angle-right"></i></button>
            </div>
        </div>
    </div>
    <script>
        var textareaSql = document.getElementById("textareasql");
        var editor = CodeMirror.fromTextArea(textareaSql, {
            lineNumbers: true, // menampilkan nomer
            styleActiveLine: true,
            mode: "text/x-sql", // text/x-mysql untuk mysql
            theme: "dracula", // tema
            smartIndent: true,
            matchTags: { bothTags: true },
            autoCloseTags: true, // auto close tag ex: <b>Open tag|closed tag</b>
            indentWithTabs: true,
            matchBrackets: true,
            autofocus: true,
            extraKeys: { "Ctrl-Space": "autocomplete" },
            hintOptions: {
                tables: {
                    users: { name: null, score: null, birthDate: null },
                    countries: { name: null, population: null, size: null },
                },
            },
        });
        function _onClick() {
            document.getElementById("result").value = editor.getValue();
        }
    </script>
@endsection
