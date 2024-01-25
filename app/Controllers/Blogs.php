<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BlogsModel;
use App\Models\BlogcategoryModel;

class Blogs extends BaseController
{
   
    // Load all blogs members
    public function index(){
        $BlogsModel = new BlogsModel();
        $data = [
            'blogs_data' => $BlogsModel->paginate(10),
            'pager' => $BlogsModel->pager
        ];
       
        echo view('templates/admin_header')
        .view('admin/blogs/view_blog', $data)
        .view('templates/admin_footer');
    }
    
    // Load add blogs form
    public function create(){
        $BlogsModel = new BlogsModel();
        $BlogcategoryModel = new BlogcategoryModel();
        $data['blogs_data'] = $BlogsModel->findall();
        $data['blogs_cat_data'] = $BlogcategoryModel->findall();
        return view('templates/admin_header')
        .view('admin/blogs/add_blog',$data)
        .view('templates/admin_footer');
    }

    // Load add blogs category form
    public function create_category(){
        $BlogcategoryModel = new BlogcategoryModel();
        $data['blogs_category_data'] = $BlogcategoryModel->findall();
        return view('templates/admin_header')
        .view('admin/blogs/add_blog_category')
        .view('templates/admin_footer');
    }

    public function category_store(){
     $BlogcategoryModel = new BlogcategoryModel();
     $category_name = $this->request->getVar('category_name');
     $data = [
                'category_name'=>$category_name
            ];

             //print_r($data); exit;
             $save = $BlogcategoryModel->insert($data);

              if($save){
                $msg = 'Category Added Successfully.';
              }else{
                $msg = 'Category Not Added.';
              }

              return redirect()->to( base_url('admin/add_blog_category') )->with('msg', $msg);
  }


   // show single blogs
    public function store()
     {  
     helper(['form', 'url']);
         
             $BlogsModel = new BlogsModel();
             $title = $this->request->getVar('title_data');
             $category_id = $this->request->getVar('cat_data');
             $blog_amount = $this->request->getVar('blog_amount');
             $url = $this->request->getVar('url_data');
             $description = $this->request->getVar('description');
             $submit_date = date('d-m-Y');
             $avatar = $this->request->getFile('file');
             $imageCheck = $avatar->getClientName();
             if($imageCheck) {
             $validated = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,1024]',
            ],
        ]);
 
       if (!$validated) {
            $msg = 'Only allow file type [jpg,jpeg,png and gif] and image size should be less than 1 MB';
        }else{
             $avatar = $this->request->getFile('file');
             $newName = $avatar->getRandomName();
             $avatar->move(ROOTPATH . 'uploads', $newName);
        
             $data = [
                'title'=>$title,
                'description'=>$description,
                'url'=>$url,
                'category_id'=>$category_id,
                'blog_amount'=>$blog_amount,
                'submit_date'=>$submit_date,
                'image' =>  $newName
                
            ];

             //print_r($data); exit;
             $save = $BlogsModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';
              }
        }
            }else{

                $data = [
                'title'=>$title,
                'description'=>$description,
                'url'=>$url,
                'blog_amount'=>$blog_amount,
                'category_id'=>$category_id,
                'submit_date'=>$submit_date
                
            ];

            $save = $BlogsModel->insert($data);

              if($save){
                $msg = 'Data Added Successfully.';
              }else{
                $msg = 'Data Not Added.';

              }

            }

       return redirect()->to( base_url('admin/add_blog') )->with('msg', $msg);
    }


    // show single testimonial
    public function singleblog($id = null){
        $BlogsModel = new BlogsModel();
        $data['blog_obj'] = $BlogsModel->where('id', $id)->first();
        return view('templates/admin_header')
        .view('admin/blogs/edit_blog', $data)
        .view('templates/admin_footer');

    }

    // update testimonial data
    public function update(){
        $id = $this->request->getVar('id');
         helper(['form', 'url']);
         
             $BlogsModel = new BlogsModel();
             $title = $this->request->getVar('title_data');
             $url = $this->request->getVar('url_data');
             $description = $this->request->getVar('description');
             $category_id = $this->request->getVar('cat_data');
             $blog_amount = $this->request->getVar('blog_amount');
             $submit_date = date('d-m-Y');
             $avatar = $this->request->getFile('file');
             $imageCheck = $avatar->getClientName();

        if($imageCheck) {

                     $validated = $this->validate([
                        'file' => [
                            'uploaded[file]',
                            'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                            'max_size[file,1024]',
                          ],
                     ]);
 
                   if (!$validated) {
                        $msg = 'Only allow file type [jpg,jpeg,png and gif] and image size should be less than 1 MB';
                    }else{
                         $avatar = $this->request->getFile('file');
                         $newName = $avatar->getRandomName();
                         $avatar->move(ROOTPATH . 'uploads', $newName);
                         $data = [
                            'title'=>$title,
                            'description'=>$description,
                            'url'=>$url,
                            'blog_amount'=>$blog_amount,
                            'category_id'=>$category_id,
                            'submit_date'=>$submit_date,
                            'image' =>  $newName
                        ];

                                 $save = $BlogsModel->update($id, $data);
                                  if($save){
                                    $msg = 'Data Updated Successfully.';
                                  }else{
                                    $msg = 'Data Not Updated.';
                                  }
                    }


            }else{

                $data = [
                'title'=>$title,
                'description'=>$description,
                'url'=>$url,
                'blog_amount'=>$blog_amount,
                'category_id'=>$category_id,
                'submit_date'=>$submit_date
                
                
                
            ];

            $save = $BlogsModel->update($id, $data);

                      if($save){
                        $msg = 'Data Updated Successfully.';
                      }else{
                        $msg = 'Data Not Updated.';

                      }
            }
       return redirect()->to( base_url('admin/view_blog') )->with('msg', $msg);
    }
 
    // delete testimonial
    public function delete_blog($id = null){
        $BlogsModel = new BlogsModel();
        $data['blogs_data_delete'] = $BlogsModel->where('id', $id)->delete($id);
             if($data){
                $msg = 'Data Deleted Successfully.';
              }else{
                $msg = 'Data Not Updated.';
              }
        return redirect()->to( base_url('admin/view_blog'))->with('msg', $msg); 
    }



}



