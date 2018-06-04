<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ngày</th>
            <th>Đài</th>
            <th>Giải</th>
            <th>Kết quả</th>
            <th>Sửa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ketqua as $kq)
        @foreach($kq as $k)
        <tr>
            <td>{{$k->id}}</td>
            <td>{{$k->giaikqxs->kqxs->ngayxoso}}</td>
            <td>{{$k->giaikqxs->kqxs->daycity->city->name}}</td>
            <td>{{$k->giaikqxs->giai->name}}</td>
            <td>{{$k->ketqua}}</td>
            <td>
                <a href="/kqxs/{{$k->id}}/edit"><button type="submit" class="btn btn-primary btn-xs">Sửa</button></a>
            </td>
        </tr>
        @endforeach
        @endforeach
    </tbody>
</table>