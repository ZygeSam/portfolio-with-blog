                    <div class="alert alert-success">
                        {{session()->get('message')}}
                   </div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach 
                        </div>
                    @endif

                    <div class="form-group"><label>Title</label><input class="form-control" type="text" name='title' value="{{old ('title')  }} "></div>
                     <div class="form-group"><label>Content</label><textarea class="form-control" name="body">{{old ('body')  }}</textarea></div>
                    <input type="hidden" name="_token" value="{{Session::token()}}">