<div>
    <H1>Jop Board</H1>
    @foreach ($jops as $jop )
        <div>
            {{ $jop['title'] }} : {{ $jop['salary'] }}
        </div>
    @endforeach
</div>
