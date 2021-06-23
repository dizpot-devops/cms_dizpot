<?php


class mediaModel extends Model
{

    public function upload()
    {
        $post = filter_input_array(INPUT_POST);
//    $category = $post['category'];
//    $tag = $post['tag'];
//    $dir = isset($post['dir']) ? $post['dir'] : '';

        $tag = isset($post['tag']) ? "-" . $post['tag'] : '';
        $dir = '';
      $public_dir = "/media/" . $dir;
      $uploaddir = __DIR__ . '/../../../public/' . $public_dir;


      $extension = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
      $newfilename = rand(0,10000) . '-' . uniqid() . $tag . "." . $extension;
      $uploadfile = $uploaddir . "/" . $newfilename;
      $public_path = $public_dir . $newfilename;

      if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        $mediaId = $this->insert('Uploaded File','img',$newfilename);

        $results = array(
            'path'=>$public_path,
            'filename'=>$newfilename,
            'mediaId'=>$mediaId
        );
        return $results;

        }
      else {
            echo "Possible file upload attack!\n";
        }
    }


    public function insert($title,$type,$path) {
        $this->mdbx_query("INSERT INTO media (title,type,path) VALUES (?,?,?)",$title,$type,$path);
        return $this->lastInsertId();
    }
}