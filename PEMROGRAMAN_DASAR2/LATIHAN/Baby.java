class Baby{
    String nama, jeniskelamin;
    Double berat;
    public void menangis(){
        System.out.println("Huhu");
    }

    public void setNama(String nm){
        this.nama = nm;
    }
    //setter

    String getNama() {
        return this.nama;
    }
    //getter

    //Jenis Kelamin
    public void setJenis(String jn){
        this.jeniskelamin = jn;
    }
    String getJenis() {
        return this.jeniskelamin;
    }

    //Berat Badan
    public void setBerat(Double br){
        this.berat = br;
    }
    Double getBerat() {
        return this.berat;
    }

    public static void main(String[] args){
        Baby baby_1 = new Baby();
        baby_1.setNama("Woilah");
        System.out.println(baby_1.getNama());

        Baby baby_2 = new Baby();
        baby_2.setJenis("Perempuan");
        System.out.println(baby_2.getJenis());

        Baby baby_3 = new Baby();
        baby_3.setBerat(80.5);
        System.out.println(baby_3.getBerat());
    }
   
}