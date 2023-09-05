<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;

class ShortLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'link' => 'required|url|active_url',
        ], [
            'link.required' => 'Please enter a link',
            'link.url' => 'Please enter a valid link',
            'link.active_url' => 'Please enter a valid link',
        ]);

        $link = $request->post('link');

        $shortLink = ShortLink::firstOrCreate([
            'link' => $link,
        ], [
            'code' => ShortLink::generateUniqueCode(),
        ]);

        $shortUrl = "http://" . $shortLink->code . '.' . config('app.domain');

        return redirect()
            ->route('home')
            ->with('success', "Here's your short link: <a href='{$shortUrl}' target='_blank'>{$shortUrl}</a>");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $code)
    {
        $shortLink = ShortLink::whereRaw('LOWER(code) = ?', strtolower($code))->first();
        if (!$shortLink) {
            return redirect()->route('home')
                ->with('error', 'Invalid short link');
        }

        $shortLink->update([
            'count' => $shortLink->count + 1,
        ]);

        return view('redirect', [
            'link' => $shortLink
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShortLink $shortLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ShortLink $shortLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShortLink $shortLink)
    {
        //
    }
}
