<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function formatChild($relationship){
	    return array();
    }
    
    public function formatParent($relationship){
	    return array();
    }
    
    public function formatItem($item, $relationships){
	    return array(
		    "id"            => $item->id,
            "version"       => $item->version,
            "created"       => $item->created,
            "changed"       => $item->changed,
            "published"     => $item->published,
            //"archived"      => $item->archived,
            "user"          => array(),
            "type"          => $item->type,
            "template"      => $item->template,
            "options"       => $item->options,
            "uri"           => $item->uri,
            "title"         => $item->title,
            "description"   => $item->description,
            "transcript"    => $item->transcript,
            "body"          => $item->body,
            "caption"       => $item->caption,
            "image"         => $item->image,
            "metadata"      => $item->metadata,
            //"relationships" => $item->relationships,
            "center"        => $item->center,
            "size"          => $item->size,
            "zoom"          => $item->zoom,
            "video"         => $item->video,
            "text"          => $item->text,
            "audio"         => $item->audio,
            "timeline"      => $item->timeline,
	    );
    }
}
