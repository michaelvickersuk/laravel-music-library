<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artists = [
            [
                'name' => 'Frank Ocean',
                'image' => 'https://lastfm-img2.akamaized.net/i/u/avatar170s/07b88e65882d07b34d0ba1aca46c4949.jpg',
                'bio' => 'Frank Ocean (born October 28, 1987) is an American singer/songwriter and member of the gleefully hedonistic hip-hop collective OFWGKTA. He was born Christopher Edwin Breaux in Long Beach, California. He has helped pen tracks for Justin Bieber, John Legend, Brandy, and Beyoncé over the last few years. In 2011, Ocean released his debut mixtape, Nostalgia, Ultra, for free via his Tumblr.',
                'albums' => [
                    [
                        'name' => 'nostalgia, ULTRA.',
                        'release_date' => '2011-03-24',
                        'artwork' => 'https://lastfm-img2.akamaized.net/i/u/174s/5ae579f8f2d3b2be7440b5889be49236.jpg',
                    ],
                    [
                        'name' => 'channel ORANGE',
                        'release_date' => '2012-07-10',
                        'artwork' => 'https://lastfm-img2.akamaized.net/i/u/174s/553678d27570452839aec0fd0cdadd63.jpg',
                    ],
                    [
                        'name' => 'Blonde',
                        'release_date' => '2016-08-20',
                        'artwork' => 'https://lastfm-img2.akamaized.net/i/u/174s/70a37398d43a393298f7cc5410b1af03.jpg',
                    ],
                ],
            ],
            [
                'name' => 'Massive Attack',
                'image' => 'https://lastfm-img2.akamaized.net/i/u/avatar170s/99fd77dfe23cf89f696f45b6f30333e6.jpg',
                'bio' => 'Massive Attack are a trip-hop group which formed in Bristol, England in 1988. The group currently consists of Robert "3D" Del Naja and Grant "Daddy G" Marshall. Third member Andy "Mushroom" Vowles left the group in 1999. The band has released five studio albums: "Blue Lines" (1991), "Protection" (1994), "Mezzanine" (1998), "100th Window" (2003), and "Heligoland" (2010). On 28 January 2016, Massive Attack released a new EP, Ritual Spirit, followed.',
                'albums' => [
                    [
                        'name' => 'Blue Lines',
                        'release_date' => '1991-04-08',
                        'artwork' => 'https://lastfm-img2.akamaized.net/i/u/174s/bfaa50bda0df44b7ba8c377e2c3647cc.jpg',
                    ],
                    [
                        'name' => 'Mezzanine',
                        'release_date' => '1998-04-17',
                        'artwork' => 'https://lastfm-img2.akamaized.net/i/u/174s/6ed4fde347cb4cf3a4fe62fa426025a3.jpg',
                    ],
                ],
            ],
            [
                'name' => 'Radiohead',
                'image' => 'https://lastfm-img2.akamaized.net/i/u/avatar170s/962a45f675db8ce893dad3ee8f62d22f.jpg',
                'bio' => 'Radiohead are an English alternative rock band from Abingdon, Oxfordshire, UK which formed in 1985. The band is composed of Thom Yorke (lead vocals, rhythm guitar, piano, beats), Jonny Greenwood (lead guitar, keyboard, other instruments), Ed O\'Brien (guitar, backing vocals), Colin Greenwood (bass guitar) and Phil Selway (drums, percussion).',
                'albums' => [
                    [
                        'name' => 'Pablo Honey',
                        'release_date' => '1993-02-23',
                        'artwork' => 'https://lastfm-img2.akamaized.net/i/u/174s/f78e87f3ecef4a4b81ec7285ae9882c0.jpg',
                    ],
                    [
                        'name' => 'The Bends',
                        'release_date' => '1994-12-01',
                        'artwork' => 'https://lastfm-img2.akamaized.net/i/u/174s/9421beaa754748d1b09236f57e3532c6.jpg',
                    ],
                    [
                        'name' => 'OK Computer',
                        'release_date' => '1997-04-16',
                        'artwork' => 'https://lastfm-img2.akamaized.net/i/u/174s/62d26c6cb4ac4bdccb8f3a2a0fd55421.jpg',
                    ],
                ],
            ],
        ];

        foreach ($artists as $artistData) {
            // Create an Artist
            $artist = \App\Entities\Artist::create([
                'name' => $artistData['name'],
                'image' => $artistData['image'],
                'bio' => $artistData['bio'],
            ]);

            foreach ($artistData['albums'] as $albumData) {
                // Add an Album
                $album = $artist->albums()->create([
                    'name' => $albumData['name'],
                    'release_date' => $albumData['release_date'],
                    'artwork' => $albumData['artwork'],
                ]);
                
                $tracks = rand(8, 13);
                
                // Add some Songs
                for ($track = 1; $track <= $tracks; $track += 1) {
                    $album->songs()->save(
                        factory(\App\Entities\Song::class)->make(['track_number' => $track])            // Better than acceptable! :-)
                    );
                }
            }
        }
    }
}
