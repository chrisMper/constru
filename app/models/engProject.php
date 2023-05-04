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
    $this->db->query("INSERT INTO `engneer_project_cancell` (postId, reason,cancellDate,engineerEmail,customerEmail,projectId) VALUES (:postId, :reason,:cancellDate,:engineerEmail,:customerEmail,:projectId)");



    $postID = intval($data['postId']);

    // Bind Values
    $this->db->bind(':reason', $data['reason']);
    $this->db->bind(':engineerEmail', $data['engineerEmail']);
    $this->db->bind(':postId', $postID);
    $this->db->bind(':customerEmail', $data['customerEmail']);
    $this->db->bind(':cancellDate', $data['cancelldate']);
    $this->db->bind(':projectId', $data['projectId']);

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

  public function engProjectComplete($row)
  {

    // Prepare Query
    $this->db->query("INSERT INTO `engneer_project_complete` (customerEmail, serviceProviderEmail,PostId,startDate,finishDate,projectId) VALUES (:customerEmail, :serviceProviderEmail,:PostId,:startDate,:finishDate.:projectId)");

    // Bind Values
    $this->db->bind(':customerEmail', $row->customerEmail);
    $this->db->bind(':serviceProviderEmail',  $row->engeneerEmail);
    $this->db->bind(':PostId',  $row->$row->customerEmail);
    $this->db->bind(':startDate',  $row->startDate);
    $this->db->bind(':finishDate', date('Y-m-d'));
    $this->db->bind(':projectId', $row->projectId);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
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




  // STAGE conformation ongoing projects (Update Stage in table)
  public function stageConformUpdateUpdateStage($row)
  {
    if ($row->stages != $row->currentStage) {
      $this->db->query('UPDATE `engineer_project_ongoing` SET currentStage = currentStage+1 WHERE  projectId=:projectId;');
      $this->db->bind(':projectId', $row->projectId);
      $this->db->execute();
    } else {
      //delete function eka ona
      $this->engProjectComplete($row);
    }
  }




  // STAGE conformation ongoing projects (Update tables)
  public function stageConformUpdateUpdateTable($row, $email) //email = sesscion email
  {
    foreach ($row as $rows) {
      if ($rows->engeneerEmail == $email) {

        $this->db->query('UPDATE `engineer_project_ongoing` SET stageComfomation= 0 WHERE projectId=:projectId');

        $this->db->bind(':projectId', $rows->projectId);

        $this->db->execute();
      } elseif ($rows->customerEmail == $email) {
        $this->db->query('UPDATE `engineer_project_ongoing` SET stageComfomation= 1  WHERE projectId=:projectId');
        $this->db->bind(':projectId', $rows->projectId);
        $this->db->execute();
        $this->stageConformUpdateUpdateStage($rows);
      }
    }
  }




  // STAGE conformation ongoing projects
  public function stageConform($email, $projectId)
  {
    $this->db->query('SELECT * FROM `engineer_project_ongoing` WHERE projectId = :projectId');

    $this->db->bind(':projectId', $projectId);

    $row = $this->db->resultset();



    $this->stageConformUpdateUpdateTable($row, $email);
  }



  public function CancellConformUpdateUpdateTable($row, $email) //email = sesscion email
  {
    foreach ($row as $rows) {
      if ($rows->engeneerEmail == $email) {

        $this->db->query('UPDATE `engineer_project_ongoing` SET stageComfomation= 0 WHERE projectId=:projectId');

        $this->db->bind(':projectId', $rows->projectId);

        $this->db->execute();
      } elseif ($rows->customerEmail == $email) {
        $this->db->query('UPDATE `engineer_project_ongoing` SET stageComfomation= 1  WHERE projectId=:projectId');
        $this->db->bind(':projectId', $rows->projectId);
        $this->db->execute();
        $this->stageConformUpdateUpdateStage($rows);
      }
    }
  }


  public function cancellConform($email, $projectId)
  {
    $this->db->query('SELECT * FROM `engineer_project_ongoing` WHERE projectId = :projectId');

    $this->db->bind(':projectId', $projectId);

    $row = $this->db->resultset();



    $this->CancellConformUpdateUpdateTable($row, $email);
  }
}
