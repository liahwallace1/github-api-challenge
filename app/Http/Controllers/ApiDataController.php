<?php

namespace App\Http\Controllers;

use App\ApiData;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiDataController extends Controller
{
    // returns Organization Data to the 'org' view
    public function org()
    {
        try {
            $client = new Client();
            $res = $client->get('https://api.github.com/orgs/BoomTownROI');
            $status = json_decode($res->getStatusCode()); // 200
            $org_data = json_decode($res->getBody());

            if($org_data->created_at > $org_data->updated_at) {
                $status = "Your request succeeded, but there is an issue with your Creation date is later than your Update date.";
                return view('error', compact('status'));
            } else {
                return view('org', compact('org_data'));
            }
        } catch(\Exception $e) {
            $status = $e->getMessage();
            return view('error', compact('status'));
        }
    }

    // returns the list of repository IDs to the 'apiData' view OR returns the 'errors' view
    public function repos()
    {
        try {
            $client = new Client();
            
            // retrieve the org data to compare the number of public repositories
            $org_data = $client->get('https://api.github.com/orgs/BoomTownROI');
            $org_repos = json_decode($org_data->getBody())->public_repos;
            $requested_number = $org_repos + 1;
            
            // to overcome the default page limits, increase the page limit to 1 over the number of public repos from the org data. 
            $res = $client->get('https://api.github.com/orgs/BoomTownROI/repos?per_page=' . $requested_number);
            $status = json_decode($res->getStatusCode());
            $data = json_decode($res->getBody());
            $request = "Repository";

            return view('apiData', compact(['request','data', 'org_repos']));

        } catch(\Exception $e) {
            $status = $e->getMessage();
            return view('error', compact('status'));
        }
    }

    // returns the list of event IDs to the 'apiData' view OR returns the 'errors' view
    public function events()
    {
         try {
            $client = new Client();
            $res = $client->get('https://api.github.com/orgs/BoomTownROI/events');
            $status = json_decode($res->getStatusCode());
            $data = json_decode($res->getBody());
            $request = "Event";

            return view('apiData', compact(['request','data']));
         } catch(\Exception $e) {
             $status = $e->getMessage();
             return view('error', compact('status'));
         }
    }

    // returns the list of hook IDs to the 'apiData' view OR returns the 'errors' view
    public function hooks()
    {
        try {
            $client = new Client();
            $res = $client->get('https://api.github.com/orgs/BoomTownROI/hooks');
            $status = json_decode($res->getStatusCode());
            $data = json_decode($res->getBody());
            if ($status == 200) {
                $request = "Hook";
                return view('apiData', compact(['request', 'data']));
            } else {
                return view('error', compact('status'));
            }
        } catch(\Exception $e) {
            $status = $e->getMessage();
            return view('error', compact('status'));
        }
    }

    // returns the list of issues IDs to the 'apiData' view OR returns the 'errors' view
    public function issues()
    {
        try {
            $client = new Client();
            $res = $client->get('https://api.github.com/orgs/BoomTownROI/issues');
            $status = json_decode($res->getStatusCode());
            $data = json_decode($res->getBody());
            $request = "Issue";

            return view('apiData', compact(['request','data']));

        } catch(\Exception $e) {
            $status = $e->getMessage();
            return view('error', compact('status'));
        }
    }

    // returns the list of member IDs to the 'apiData' view OR returns the 'errors' view
    public function members()
    {
        try {
            $client = new Client();
            $res = $client->get('https://api.github.com/orgs/BoomTownROI/members');
            $status = json_decode($res->getStatusCode());
            $data = json_decode($res->getBody());
            $request = "Members";

            return view('apiData', compact(['request','data']));

        } catch(\Exception $e) {
            $status = $e->getMessage();
            return view('error', compact('status'));
        }
    }

    // returns the list of public member IDs to the 'apiData' view OR returns the 'errors' view
    public function publicMembers()
    {
        try {
            $client = new Client();
            $res = $client->get('https://api.github.com/orgs/BoomTownROI/public_members');
            $status = json_decode($res->getStatusCode());
            $data = json_decode($res->getBody());
            $request = "Public Members";

            return view('apiData', compact(['request','data']));

        } catch(\Exception $e) {
            $status = $e->getMessage();
            return view('error', compact('status'));
        }
    }
}
