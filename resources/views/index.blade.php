<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Home Page</title>
</head>
<body>
    @include ('header')
    <div class='w-full h-screen flex'>
        <div class='w-3/12 bg-slate-200 h-auto'>
            <form action="{{route('student.create')}}" method='post'>
                @csrf
                <div class='w-full p-2 -mt-2'>
                    <lable class='font-semibold '>Name</lable>
                    <input type='text' name='name' class='py-2 rounded-md border w-full'/>
                </div>
                <div class='w-full p-2 -mt-2'>
                    <lable class='font-semibold '>Contact</lable>
                    <input type='number' name='contact' class='py-2 rounded-md border w-full'/>
                </div>
                <div class='w-full p-2 -mt-2'>
                    <lable class='font-semibold '>Mathematics</lable>
                    <input type='number' name='math' class='py-2 rounded-md border w-full'/>
                </div>
                <div class='w-full p-2 -mt-2'>
                    <lable class='font-semibold '>Physics</lable>
                    <input type='number' name='phy' class='py-2 rounded-md border w-full'/>
                </div>
                <div class='w-full p-2 -mt-2'>
                    <lable class='font-semibold '>Chemisthy</lable>
                    <input type='number' name='che' class='py-2 rounded-md border w-full'/>
                </div>
                <div class='w-full p-2 -mt-2'>
                    <lable class='font-semibold '>English</lable>
                    <input type='number' name='eng' class='py-2 rounded-md border w-full'/>
                </div>
                <div class='w-full p-2 -mt-2'>
                    <lable class='font-semibold '>Hindi</lable>
                    <input type='number' name='hindi' class='py-2 rounded-md border w-full'/>
                </div>
                <div class='w-full p-2 -mt-2'>
                    <input type='Submit' name='Submit' class='w-full py-2 bg-teal-500 font-semibold hover:bg-teal-600 rounded-md text-sm'/>
                </div>
            </form>
        </div>
        <div class='w-3/4 h-screen'>
            <div class='p-5'>
                <table class='w-full'>
                    <thead class='border-2 border-black'>
                        <tr class=''>
                            <th class='border-2 border-black'>Id</th>
                            <th class='border-2 border-black'>Name</th>
                            <th class='border-2 border-black'>Contact</th>
                            <th class='border-2 border-black'>Math</th>
                            <th class='border-2 border-black'>Physics</th>
                            <th class='border-2 border-black'>Chemisthy</th>
                            <th class='border-2 border-black'>English</th>
                            <th class='border-2 border-black'>Hindi</th>
                        </tr>
                    </thead>

                    
                    <tbody class='text-center border-2 py-2'>
                        @foreach($sdata as $row)
                        <tr class=''>
                            
                           <td class="border-2">{{$row['id']}}</td>
                           <td class="border-2">{{$row['name']}}</td>
                           <td class="border-2">{{$row['contact']}}</td>
                           <td class="border-2">{{$row['math']}}</td>
                           <td class="border-2">{{$row['phy']}}</td>
                           <td class="border-2">{{$row['che']}}</td>
                           <td class="border-2">{{$row['eng']}}</td>
                           <td class="border-2">{{$row['hindi']}}</td>
                           
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
</body>
</html> 