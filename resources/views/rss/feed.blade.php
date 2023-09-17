@php echo('<?xml version="1.0" encoding="utf-8"?>') @endphp
<rss
    version="2.0"
    xmlns:atom="http://www.w3.org/2005/Atom"
    xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd"
    xmlns:podcast="https://podcastindex.org/namespace/1.0"
>
    <channel>
        <title>Podkast IT Tipa</title>
        <link>{{ route('home') }}</link>
        <description>Sve što ste hteli da znate o softverskom inženjerstvu, a niste smeli da pitate!</description>
        <language>sr-RS</language>
        <pubDate>{{ now()->format('D, d M Y H:i:s O') }}</pubDate>
        <lastBuildDate>{{ now()->format('D, d M Y H:i:s O') }}</lastBuildDate>
        <atom:link href="{{ route('rss-feed') }}" rel="self" type="application/rss+xml" />
        <itunes:category text="Technology"></itunes:category>
        <itunes:category text="Science"></itunes:category>
        <itunes:author>Nikola Knežević</itunes:author>
        <itunes:subtitle>Sve što ste hteli da znate o softverskom inženjerstvu, a niste smeli da pitate!</itunes:subtitle>
        <itunes:explicit>no</itunes:explicit>
        <itunes:type>episodic</itunes:type>
        <itunes:owner>
            <itunes:name>Nikola Knežević</itunes:name>
            <itunes:email>knezevicdev@gmail.com</itunes:email>
        </itunes:owner>
        <podcast:locked owner="knezevicdev@gmail.com">yes</podcast:locked>
        <podcast:guid>6a88773a-4d43-5084-abdb-a7e288acfb14</podcast:guid>

        @foreach($episodes as $episode)
            <item>
                <title>{{ $episode->title }}</title>
                <description>{{ $episode->description }}</description>
                <pubDate>{{ date('D, d M Y H:i:s O', strtotime($episode->published_at)) }}</pubDate>
                <enclosure url="{{ URL::to($episode->audio_url) }}" length="{{ $episode->audio_size_in_kilobytes }}" type="audio/mpeg" />
                <link>{{ URL::to($episode->audio_url) }}</link>
                <itunes:author>Nikola Knežević</itunes:author>
                <itunes:summary>{{ $episode->description }}</itunes:summary>
                <itunes:image href="{{ URL::to($episode->cover_image_url) }}" />
                <itunes:duration>{{ gmdate('H:i:s', $episode->audio_length_in_seconds) }}</itunes:duration>
                <itunes:explicit>no</itunes:explicit>
                <itunes:episode>{{ $episode->number }}</itunes:episode>
            </item>
        @endforeach
    </channel>
</rss>
