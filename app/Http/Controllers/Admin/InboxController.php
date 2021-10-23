<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inbox;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function index()
    {
        $items = Inbox::latest()->get();
        return view('admin.pages.inbox.index',[
            'title' => 'Data Pesan',
            'items' => $items
        ]);
    }

    public function setStatus($id)
    {
        $item = Inbox::findOrFail($id);
        $status = request('status');

        if($status == 0)
        {
            $item->update([
                'status' => 1
            ]);
        }else{
            $item->update([
                'status' => 0
            ]);
        }

        return redirect()->route('admin.inboxes.index')->with('success','Status inbox berhasil diubah');
    }

    public function destroy($id)
    {
        $item = Inbox::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.inboxes.index')->with('success','Inbox berhasil dihapus');
    }
}
