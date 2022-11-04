<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Room;
use App\Models\Home;
use App\Models\Land;
use App\Models\Property;
use Illuminate\Support\Facades\Input;

class PropertyController extends Controller
{
    public function index()
    {
        $properties=Property::all();
        return view('welcome', compact('properties'));
    }
    public function show(Property $property)
    {
        return view('properties-details',compact('property'));
    }
    public function showAdmin($type_id)
    {
        if($type_id==1)
        {
            $rooms=DB::table('properties')
                            ->join('rooms', 'properties.room_id', '=', 'rooms.id')
                            ->get();
            return view('dashboard.rooms.index',compact('rooms'));

        }
        if($type_id==2)
        {
            $homes=DB::table('properties')
                            ->join('homes', 'properties.home_id', '=', 'homes.id')
                            ->get();
            return view('dashboard.homes.index',compact('homes'));

            
        }
        if($type_id==3)
        {
            $lands=DB::table('properties')
                            ->join('lands', 'properties.land_id', '=', 'lands.id')
                            ->get();
            return view('dashboard.lands.index',compact('lands'));

        }
        
        
 
       
        
    }
    public function createProperty($type_id)
    {
        $owners=User::where('role_id',2);
        if($type_id==1)
        {
            return view('dashboard.rooms.create',compact('owners'));
        }
        if($type_id==2)
        {
            return view('dashboard.homes.create',compact('owners'));
        }
        if($type_id==3)
        {
            return view('dashboard.lands.create',compact('owners'));
        }

    }
    public function saveRoom(Request $request)
    {
        
            $room=new Room;
            if($request->furnished=="Yes")
            {
                $room->isFurnished=true;
            }
            else
            {
                $room->isFurnished=false;
            }
            if($request->tiled=="Yes")
            {
                $room->isTiled=true;
            }
            else
            {
                $room->isTiled=false;
            }
            if($request->painted=="Yes")
            {
                $room->isPainted=true;
            }
            else
            {
                $room->isPainted=false;
            }
            $room->save();
          
            $property=new Property;
            $property->intitule=$request->intitule;
            $property->adresse=$request->adress;
            $property->loyer=$request->rent;
            $property->description=$request->description;
            $property->visite_virtuelle=$request->visite_virtuelle;
            $property->owner_id=$request->owner_id;
            $property->status=$request->status;
            $property->details=$request->details;
            $property->room_id=$room->id;
            $property->type_id=1;
           
                $image = $request->file('photo');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $image->move('images/properties/',$filename);
            
            
            $property->image=$filename;
            $property->superficie=$request->superficie;
            $property->save();
            $rooms=DB::table('properties')
                            ->join('rooms', 'properties.room_id', '=', 'rooms.id')
                            ->get();
           
            return redirect()->route('admin.properties.index',1)->with('success','Chambre ajoutée avec succès');
        }
        public function saveHome (Request $request)
        {
            $home=new Home;
            if($request->furnished=="Yes")
            {
                $home->isFurnished=true;
            }
            else
            {
                $home->isFurnished=false;
            }
            if($request->tiled=="Yes")
            {
                $home->isTiled=true;
            }
            else
            {
                $home->isTiled=false;
            }
            if($request->painted=="Yes")
            {
                $home->isPainted=true;
            }
            else
            {
                $home->isPainted=false;
            }
            $home->rooms_number=$request->rooms_number;
            $home->save();
          
            $property=new Property;
            $property->intitule=$request->intitule;
            $property->adresse=$request->adress;
            $property->loyer=$request->rent;
            $property->description=$request->description;
            $property->visite_virtuelle=$request->visite_virtuelle;
            $property->owner_id=$request->owner_id;
            $property->status=$request->status;
            $property->details=$request->details;
            
            $property->home_id=$home->id;
            $property->type_id=2;
           
                $image = $request->file('photo');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $image->move('images/properties/',$filename);
            
            
            $property->image=$filename;
            $property->superficie=$request->superficie;
            $property->save();
            $homes=DB::table('properties')
                            ->join('homes', 'properties.home_id', '=', 'homes.id')
                            ->get();
                    return redirect()->route('admin.properties.index',2)->with('success','Maison ajoutée avec succès');
                        }
        public function saveLand(Request $request)
        {
            $land=new Land;
            
            if($request->rehoused=="Yes")
            {
                $land->isRehoused=true;
            }
            else
            {
                $land->isRehoused=false;
            }
            
            $land->save();
          
            $property=new Property;
            $property->intitule=$request->intitule;
            $property->adresse=$request->adress;
            $property->loyer=$request->rent;
            $property->description=$request->description;
            $property->visite_virtuelle=$request->visite_virtuelle;
            $property->owner_id=$request->owner_id;
            $property->status=$request->status;
            $property->details=$request->details;
            
            $property->land_id=$land->id;
            $property->type_id=3;
           
                $image = $request->file('photo');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $image->move('images/properties/',$filename);
            
            
            $property->image=$filename;
            $property->superficie=$request->superficie;
            $property->save();
            $lands=DB::table('properties')
                            ->join('lands', 'properties.land_id', '=', 'lands.id')
                            ->get();
            return redirect()->route('admin.properties.index',3)->with('success','Parcelle ajoutée avec succès');

        }
        public function editHome($id)
        {
            $home=DB::table('properties')
            ->join('homes', 'properties.home_id', '=','homes.id')
            ->where('properties.home_id',$id)
            ->get();
            $owners=User::where('role_id',2);
          
            return view('dashboard.homes.edit',compact('home','owners'));

        }
        public function updateHome(Home $home, Request $request)
        {
            $property=Property::where('home_id',$home->id)->first();
            if($request->furnished==="Yes")
            {
                $home->isFurnished=true;
            }
            else
            {
                $home->isFurnished=false;
            }
            if($request->tiled==="Yes")
            {
                $home->isTiled=true;
            }
            else
            {
                $home->isTiled=false;
            }
            if($request->painted==="Yes")
            {
                $home->isPainted=true;
            }
            else
            {
                $home->isPainted=false;
            }
            $home->rooms_number=$request->rooms_number;
            $home->save();

            $property->intitule=$request->intitule;
            $property->adresse=$request->adress;
            $property->loyer=$request->rent;
            $property->description=$request->description;
            $property->visite_virtuelle=$request->visite_virtuelle;
            $property->owner_id=$request->owner_id;
            $property->status=$request->status;
            $property->details=$request->details;
            if($request->hasFile('photo'))
            {
                $image = $request->file('photo');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $image->move('images/properties/',$filename);
                $property->image=$filename;
            }
           
        
        
            
            $property->superficie=$request->superficie;
            $property->save();
            return redirect()->route('admin.properties.index',2)->with('success','Maison modifiée avec succès');


        }

        public function editRoom($id)
        {
            $room=DB::table('properties')
            ->join('rooms', 'properties.room_id', '=','rooms.id')
            ->where('properties.room_id',$id)
            ->get();
            $owners=User::where('role_id',2);
          
            return view('dashboard.rooms.edit',compact('room','owners'));

        }
        public function updateRoom(Room $room, Request $request)
        {
            $property=Property::where('room_id',$room->id)->first();
            if($request->furnished==="Yes")
            {
                $room->isFurnished=true;
            }
            else
            {
                $room->isFurnished=false;
            }
            if($request->tiled==="Yes")
            {
                $room->isTiled=true;
            }
            else
            {
                $room->isTiled=false;
            }
            if($request->painted==="Yes")
            {
                $room->isPainted=true;
            }
            else
            {
                $room->isPainted=false;
            }
            $room->save();

            $property->intitule=$request->intitule;
            $property->adresse=$request->adress;
            $property->loyer=$request->rent;
            $property->description=$request->description;
            $property->visite_virtuelle=$request->visite_virtuelle;
            $property->owner_id=$request->owner_id;
            $property->status=$request->status;
            $property->details=$request->details;
            if($request->hasFile('photo'))
            {
                $image = $request->file('photo');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $image->move('images/properties/',$filename);
                $property->image=$filename;
            }
           
        
        
            
            $property->superficie=$request->superficie;
            $property->save();
            return redirect()->route('admin.properties.index',1)->with('success','Chambre modifiée avec succès');
            

        }
        public function editLand($id)
        {
            $land=DB::table('properties')
            ->join('lands', 'properties.land_id', '=','lands.id')
            ->where('properties.land_id',$id)
            ->get();
            $owners=User::where('role_id',2);
          
            return view('dashboard.lands.edit',compact('land','owners'));
        }
        public function updateLand(Land $land, Request $request)
        {
            $property=Property::where('land_id',$land->id)->first();
            
            if($request->rehoused==="Yes")
            {
                $land->isRehoused=true;
            }
            else
            {
                $land->isRehoused=false;
            }
            $land->save();

            $property->intitule=$request->intitule;
            $property->adresse=$request->adress;
            $property->loyer=$request->rent;
            $property->description=$request->description;
            $property->visite_virtuelle=$request->visite_virtuelle;
            $property->owner_id=$request->owner_id;
            $property->status=$request->status;
            $property->details=$request->details;
            if($request->hasFile('photo'))
            {
                $image = $request->file('photo');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $image->move('images/properties/',$filename);
                $property->image=$filename;
            }
           
        
        
            
            $property->superficie=$request->superficie;
            $property->save();
            return redirect()->route('admin.properties.index',3)->with('success','Parcelle modifiée avec succès');

        }

        public function destroyHome($id)
        {
            $property=Property::where('home_id',$id)->first();
            $property->delete();
            $home=Home::find($id);
            $home->delete();
            return redirect()->route('admin.properties.index',2)->with('success','Maison supprimée avec succès');

           

        }
        public function destroyLand($id)
        {
            $property=Property::where('land_id',$id)->first();
            $property->delete();
            $land=Land::find($id);
            $land->delete();
            return redirect()->route('admin.properties.index',3)->with('success','Parcelle supprimée avec succès');
        }
        public function destroyRoom($id)
        {
            $property=Property::where('room_id',$id)->first();
            $property->delete();
            $room=Room::find($id);
            $room->delete();
            return redirect()->route('admin.properties.index',1)->with('success','Chambre supprimée avec succès');
        }
    

    }

