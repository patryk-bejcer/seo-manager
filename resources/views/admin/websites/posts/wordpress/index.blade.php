<div class="panel-body">
    <table class="table table-condensed table-bordered table-striped">
        <thead>
        <tr>
            <th>Post Name</th>
            <th>URL</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Last modify</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)

            <tr>
                <td>{{$post->post_title}}</td>

                <td>{{$post->post_name}}</td>

                <td>{{$post->post_status}}</td>

                <td>{{$post->post_date}}</td>

                <td>{{$post->post_modified}}</td>

                <td><a href="{{url('admin/posts/' . $website->id . '/edit/' . $post->ID)}}" class="btn btn-primary">Edit</a></td>

                {{--<td>--}}
                {{--<a href="{{ route('websites.show', ['id' => $website->id ]) }}" type="button" class="btn btn-primary btn-sm" title="Show all posts"><i class="fa fa-search"> Show posts</i></a>--}}
                {{--</td>--}}
            </tr>
        @endforeach

        {{$posts->links()}}

        </tbody>
    </table>
</div>