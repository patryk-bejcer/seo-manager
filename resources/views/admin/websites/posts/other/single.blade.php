<div class="panel-body">
    <table class="table table-condensed table-bordered table-striped">
        <thead>
        <tr>
            <th>imię i nazwisko użytkownika</th>
            <th>treść</th>
            <th>widocznosc</th>
            <th>data utworzenia</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)

            <tr>
                <td>{{$post->user}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->visability}}</td>
                <td>{{$post->created_at}}</td>
                <td><a href="" class="btn btn-primary">Edit</a></td>

                {{--<td>--}}
                {{--<a href="{{ route('websites.show', ['id' => $website->id ]) }}" type="button" class="btn btn-primary btn-sm" title="Show all posts"><i class="fa fa-search"> Show posts</i></a>--}}
                {{--</td>--}}
            </tr>
        @endforeach


        </tbody>
    </table>
</div>