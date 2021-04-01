<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Levels Controller
 *
 * @property \App\Model\Table\LevelsTable $Levels
 *
 * @method \App\Model\Entity\Level[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LevelsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses'],
        ];
        $levels = $this->paginate($this->Levels);

        $this->set(compact('levels'));
    }

    public function filter()
    {
        $id = $this->request->getQuery('id');
        $lv = $this->request->getQuery('lv');
        
        /* consulta level */
        if(isset($lv)){
            $query = $this->Levels->find('all')
            ->where(['id_level =' => $lv, 'course_id ='=>$id ]);
            $level = $query;
        }else{
            $query = $this->Levels->find('all')
            ->where(['course_id'=>(isset($id))?$id:1])
            ->order(['id_level'=>'ASC'])
            ->limit(1);
            $level = $query;
        }

        /* consulta levels */
        if(isset($id)){
            $query = $this->Levels->find('all')
            ->where(['course_id =' => $id ]);
            $levels = $query;
        }else{
            $this->paginate = [
            'contain' => ['Courses'],
            ];
            $levels = $this->paginate($this->Levels);
        }
        
        $this->loadModel('Courses');
        $courses = $this->Courses->find('all')->toList();

        $this->set(compact('courses','level','levels'));
    }
    /**
     * View method
     *
     * @param string|null $id Level id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $level = $this->Levels->get($id, [
            'contain' => ['Courses'],
        ]);

        $this->set('level', $level);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $level = $this->Levels->newEntity();
        if ($this->request->is('post')) {
            $level = $this->Levels->patchEntity($level, $this->request->getData());
            if ($this->Levels->save($level)) {
                $this->Flash->success(__('The level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The level could not be saved. Please, try again.'));
        }
        $courses = $this->Levels->Courses->find('list', ['limit' => 200]);
        $this->set(compact('level', 'courses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Level id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $level = $this->Levels->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $level = $this->Levels->patchEntity($level, $this->request->getData());
            if ($this->Levels->save($level)) {
                $this->Flash->success(__('The level has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The level could not be saved. Please, try again.'));
        }
        $courses = $this->Levels->Courses->find('list', ['limit' => 200]);
        $this->set(compact('level', 'courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Level id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $level = $this->Levels->get($id);
        if ($this->Levels->delete($level)) {
            $this->Flash->success(__('The level has been deleted.'));
        } else {
            $this->Flash->error(__('The level could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
