<?php
interface Printable
{
    public function print();
}

interface Scanable
{
    public function scan();
}

interface Faxable
{
    public function fax();
}

class Printer implements Printable, Scanable
{
    public function print()
    {
        // Implementation for printing
    }

    public function scan()
    {
        // Implementation for scanning
    }
}

class FaxMachine implements Printable, Faxable
{
    public function print()
    {
        // Implementation for printing
    }

    public function fax()
    {
        // Implementation for faxing
    }
}

?>