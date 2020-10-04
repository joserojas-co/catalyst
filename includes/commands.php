<?php
  
/**
 * 
 * 
 */

class CommandLineDirectives
{
    /**
     * This function displays the help commands
     * @return string
     */
    private function displayHelp() 
    {
        $message  = "Available Command Directives:\n";
        $message .= "   --file [csv file name] – The name of the CSV file to be parsed.\n";
        $message .= "   --create_table – Create users table.\n";
        $message .= "   --dry_run – To be used with the --file directive to run the script (this command doesn't alter the database).\n";
        $message .= "   -u – MySQL username.\n";
        $message .= "   -p – MySQL password.\n";
        $message .= "   -h – MySQL host.\n";
        $message .= "   --help – List the available Command Directives.\n";

        return $message;
    }

    /**
     * Implements readCommandLineDirectives for every command line directive
     * @param array 
     */
    public function readCommandLineDirectives(array $directives)
    {
        $cmd = isset($directives[1]) ? $directives[1] : "";
        switch ($cmd) {
            case "--help":
                echo $this->displayHelp();
                break;
            case "--file":
                echo "File message";
                break;
            case "--create_table":
                echo "Table message";
                break;     
            case "--dry_run":
                echo "Dry run message";
                break;       
            case "--u":
                echo "MySQL username";
                break;                
            case "--p":
                echo "MySQL password";
                break;              
            case "--h":
                echo "MySQL host";
                break;                                   
            default:
                echo INVALID_COMMAND;
                break;
        }
    }
}