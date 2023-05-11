<?php
class engProject
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  //enter data to enginer project pending    
  public function engProjectPending($data)
  {

    // Prepare Query
    $this->db->query('INSERT INTO `engneer_project_pending` (PostId, customerEmail,engineerEmail) VALUES (:postId, :customerEmail,:engineerEmail)');

    $postID = intval($data['postId']);

    // Bind Values
    $this->db->bind(':customerEmail', $data['customerEmail']);
    $this->db->bind(':engineerEmail', $data['engineerEmail']);
    $this->db->bind(':postId', $postID);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }


  // get all data of pending projects
  public function getEngProgectPending()
  {

    $this->db->query('SELECT * FROM engneer_project_pending');
    $results = $this->db->resultSet();

    return $results;
  }


  // get all data of ongoing projects
  public function getEngineerProjectOngoing()
  {

    $this->db->query('SELECT * FROM engineer_project_ongoing');
    $results = $this->db->resultSet();

    return $results;
  }

  // get all data of Complete projects
  public function getEngineerProjectComplete()
  {

    $this->db->query('SELECT * FROM engneer_project_complete');
    $results = $this->db->resultSet();

    return $results;
  }

  // get all data of Cancell projects
  public function getEngineerProjectCancell()
  {

    $this->db->query('SELECT * FROM engneer_project_cancell');
    $results = $this->db->resultSet();

    return $results;
  }


  //enter data to enginer project ongoing    
  public function engProjectOngoing($data)
  {

    // Prepare Query
    $this->db->query('INSERT INTO `engineer_project_ongoing` (postId, stages,startDate,dueDate,engeneerEmail,currentStage,customerEmail,projectId) VALUES (:postId, :noOfStages,:startDate,:completionDate,:engineerEmail,1,:customerEmail,:projectId)');

    $postID = intval($data['postId']);

    // Bind Values
    $this->db->bind(':noOfStages', $data['noOfStages']);
    $this->db->bind(':engineerEmail', $data['engineerEmail']);
    $this->db->bind(':postId', $postID);
    $this->db->bind(':startDate', $data['startDate']);
    $this->db->bind(':completionDate', $data['completionDate']);
    $this->db->bind(':customerEmail', $data['customerEmail']);
    $this->db->bind(':projectId', $data['projectId']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //enter data to direct to cancell 
  public function engProjectCancell($data)
  {

    // Prepare Query
    $this->db->query("INSERT INTO `engneer_project_cancell` (postId, engReason,cancellDate,engineerEmail,customerEmail,projectId,customerReason,startDate,completionWhenCancell) VALUES (:postId, :engineerReason,:cancellDate,:engineerEmail,:customerEmail,:projectId,:customerReason,:startDate,:completionWhenCancell)");



    $postID = intval($data['postId']);

   

    // Bind Values
    $this->db->bind(':engineerReason', $data['engineerReason']);
    $this->db->bind(':engineerEmail', $data['engineerEmail']);
    $this->db->bind(':postId', $postID);
    $this->db->bind(':customerEmail', $data['customerEmail']);
    $this->db->bind(':cancellDate', $data['cancelldate']);
    $this->db->bind(':projectId', $data['projectId']);
    $this->db->bind(':completionWhenCancell', $data['completionWhenCancell']);
    $this->db->bind(':customerReason', $data['customerReason']);
    $this->db->bind(':startDate', $data['startDate']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // find project from ongoing table 
  public function findOngoingProjectById($projectId)
  {
    $this->db->query("SELECT * FROM `engineer_project_ongoing` WHERE projectId = :projectId ");
    $this->db->bind(':projectId', $projectId);

    $row = $this->db->single();

    //Check Rows

    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  // find project from ongoing table and get data
  public function findOngoingProjectDataById()
  {
    $this->db->query("SELECT * FROM `engineer_project_ongoing`");


    $row = $this->db->resultSet();

    return $row;
  }


  //calculate presentage 
  public function calculatePresentage($projectId)
  {

    $project = $this->findOngoingProjectDataById();
    
    foreach ($project as $projects) :
      if ($projects->projectId == $projectId) :
        $presentage = round(($projects->currentStage / $projects->stages) * 100, 2);
        
        return $presentage;
        
      endif;
      
    endforeach;
  }



  // find project from cancell table 
  public function findCancellProjectById($projectId)
  {
    $this->db->query("SELECT * FROM `engneer_project_cancell` WHERE projectId = :projectId ");
    $this->db->bind(':projectId', $projectId);
    $row = $this->db->single();
    //Check Rows
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }



  // add data to complete Table

  public function engProjectComplete($data)
  {

    foreach ($data['row'] as $row) :
      if ($row->projectId = $data['projectId']) :

        // Prepare Query
        $this->db->query("INSERT INTO `engneer_project_complete` (customerEmail, serviceProviderEmail,PostId,startDate,finishDate,projectId,stages) VALUES (:customerEmail, :serviceProviderEmail,:PostId,:startDate,:finishDate,:projectId,:stages)");

        // Bind Values
        $this->db->bind(':customerEmail', $row->customerEmail);
        $this->db->bind(':serviceProviderEmail',  $row->engeneerEmail);
        $this->db->bind(':PostId',  $row->postId);
        $this->db->bind(':startDate',  $row->startDate);
        $this->db->bind(':finishDate', date('Y-m-d'));
        $this->db->bind(':projectId', $row->projectId);
        $this->db->bind(':stages', $row->stages);

        //Execute
        if ($this->db->execute()) {
          $this->deleleEngProgectOngoing($row->projectId);
          return true;
        } else {
          return false;
        }


      endif;
    endforeach;
  }


  //delete data from enginer project pending
  public function deleleEngProgectPending($id)
  {
    // Prepare Query
    $this->db->query('DELETE FROM engneer_project_pending WHERE projectId= :id');
    // Bind Values
    $this->db->bind(':id', $id);
    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }



  //delete data from enginer project pending
  public function deleleEngProgectOngoing($id)
  {
    // Prepare Query
    $this->db->query('DELETE FROM engineer_project_ongoing WHERE projectId= :id');
    // Bind Values
    $this->db->bind(':id', $id);
    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }


  //delete data from enginer project pending
  public function deleteFromEngneerordercancellnote($id)
  {


    // Prepare Query
    $this->db->query('DELETE FROM engneerordercancellnote WHERE projectId= :id');
    // Bind Values
    $this->db->bind(':id', $id);
    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }




  // STAGE conformation ongoing projects (Update Stage in table)
  public function stageConformUpdateStage($row)
  {

    $this->db->query('UPDATE `engineer_project_ongoing` SET currentStage = currentStage+1 WHERE  projectId=:projectId;');
    $this->db->bind(':projectId', $row->projectId);

    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }




  // STAGE conformation ongoing projects (Update tables)
  public function stageConformUpdateUpdateTable($row, $email) //email = sesscion email
  {
    foreach ($row as $rows) {
      if ($rows->engeneerEmail == $email) {

        $this->db->query('UPDATE `engineer_project_ongoing` SET stageComfomation= 0 WHERE projectId=:projectId');

        $this->db->bind(':projectId', $rows->projectId);
        if ($this->db->execute()) {

          return true;
        } else {
          return false;
        }
      } elseif ($rows->customerEmail == $email) {
        $this->db->query('UPDATE `engineer_project_ongoing` SET stageComfomation= -1  WHERE projectId=:projectId');
        $this->db->bind(':projectId', $rows->projectId);
        $this->db->execute();
        return $this->stageConformUpdateStage($rows);
      }
    }
  }



  public function getProject()
  {
    $this->db->query('SELECT * FROM `engineer_project_ongoing` ');

    $row = $this->db->resultSet();

    return $row;
  }

  public function getcancellNotes()
  {
    $this->db->query('SELECT * FROM `engneerordercancellnote` ');

    $row = $this->db->resultSet();

    return $row;
  }



  // STAGE conformation ongoing projects
  public function stageConform($email, $projectId)
  {
    $this->db->query('SELECT * FROM `engineer_project_ongoing` WHERE projectId = :projectId');
    $this->db->bind(':projectId', $projectId);
    $row = $this->db->resultset();

    return $this->stageConformUpdateUpdateTable($row, $email);
  }




  public function CancellConformUpdateUpdateTable($data)
  {


    $this->db->query('INSERT INTO `engneerordercancellnote` (projectId,cancellNote,cancelledEmail) VALUES (:projectId,:cancellNote,:cancelledEmail) ');
    $this->db->bind(':projectId', $data['projectId']);
    $this->db->bind(':cancellNote', $data['reason']);
    $this->db->bind(':cancelledEmail', $data['userEmail']);


    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }


  public function cancellConform($data)
  {
    $this->db->query('UPDATE `engineer_project_ongoing` SET cancellComfomation=0 WHERE projectId=:projectId');
    $this->db->bind(':projectId', $data['projectId']);
    $this->db->execute();


    if ($this->CancellConformUpdateUpdateTable($data)) {
      return true;
    } else {
      return false;
    }
  }


  public function cusCancellConform($data)
  {
    $this->db->query('UPDATE `engineer_project_ongoing` SET cancellComfomation=1 WHERE projectId=:projectId');
    $this->db->bind(':projectId', $data['projectId']);
    $this->db->execute();


    if ($this->CancellConformUpdateUpdateTable($data)) {
      return true;
    } else {
      return false;
    }
  }


  public function cheakCancellComfomation($projectId)
  {

    $this->db->query("SELECT * FROM `engneerordercancellnote` WHERE projectId = :projectId ");
    $this->db->bind(':projectId', $projectId);
    $row = $this->db->single();
    //Check Rows
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }
}
