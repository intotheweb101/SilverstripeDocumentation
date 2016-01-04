<?php
class DocumentationController extends Page_Controller
{
    private static $allowed_actions = array( 
    );

    public function index()
    {

        $member = Member::currentUserID();
        if (Permission::checkMember($member, 'CMS_ACCESS')) {

            $Documentation = Documentation::get();
            $list = new ArrayList();
            foreach ($Documentation as $Document) {
                $list->push($Document);
            }
            
            return $this->customise(array(
                'Documentation' => $list,
            ))->renderWith(array(
                'Documentation',
                'Page'
            ));
        }else{
            // Debug::dump('no access');
            // die();
            return $this->redirect('/Security/login');
        }
    }
}
