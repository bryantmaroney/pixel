<div class="dash-page-listarea dash-page-personaarea">
    <table class="table table-striped">
        <thead>
        <tr class="customTheadTr">
            <th scope="col" style="width: 508px">Persona Name</th>
            <th scope="col">Date Added</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @if(!is_null($persona))
            @if(count($persona) < 1)
                <tr class="customTrStyle">
                    <td colspan="7">No Record Found</td>
                </tr>
            @endif
            @foreach($persona as $k => $v)
                <tr>
                    <td>{{$v->persona_name}}</td>
                    <td>{{\Carbon\Carbon::parse($v->creatd_at)->toDateString()}}</td>
                    <td>
                        <a href="{{route('editPersona',$v->id)}}?project={{$project->id}}"  class="dash-page-listactions ml-1" style="margin-top: 4px">VIEW & EDIT</a>
                        <a href="{{route('deletePersona',$v->id)}}?project={{$project->id}}"  class="dash-page-listactions ml-1" style="margin-top: 4px"> DELETE</a>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>
                        <a href="{{route('add-persona')}}?project={{$project->id}}">Add New Persona</a>
                    </td>
                </tr>
            </tbody>
        </table>

{{--    </div>--}}

{{--	<ul class="dash-page-listtitles dash-list-personas">--}}
{{--		<li>Persona Name</li>--}}
{{--		<li>Date Added</li>--}}
{{--		<li>Actions</li>--}}
{{--	</ul>--}}
{{--	<ul>--}}
{{--		<li>--}}
{{--			<ul>--}}
{{--				<li>The Teacher</li>--}}
{{--				<li>10/2/2018</li>--}}
{{--				<li>--}}
{{--					<div class="dash-page-listactions">VIEW</div>--}}
{{--				</li>--}}
{{--			</ul>--}}
{{--		</li>--}}
{{--		--}}
{{--		<li>--}}
{{--			<ul>--}}
{{--				<li style="width:calc(100% - 32px);">--}}
{{--					<a href="#">Add New Persona</a>--}}
{{--				</li>--}}
{{--			</ul>--}}
{{--		</li>--}}
{{--	</ul>--}}
</div>