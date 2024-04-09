import React from 'react'
import { sidebarlist } from './sidebar-list'
import { Link } from '@inertiajs/react';
import { motion } from "framer-motion"

const Sidebar = () => {

    return (
        <motion.section initial={{ transform: "translateX(-100%)" }} animate={{ transform: "translateX(0%)" }} exit={{ transform: "translateX(-100%)" }} transition={{ duration: 0.8 }} className="w-64 bg-white shadow-lg  h-screen pt-20 duration-500">
            <div className='text-start mx-6'>
                {sidebarlist.map((sl) => (
                    <Link href={sl.url} key={sl.name}>
                        <p className={`${sl.url === window.location.pathname ? "bg-blue-50" : ""} py-3 font-bold hover:bg-blue-50 ps-2 rounded `} style={{ color: "#173b7c" }}>
                            <i className={sl.icon + " pr-2"}></i>{sl.name}
                        </p>
                    </Link>
                ))}
            </div>
        </motion.section >
    )
}

export default Sidebar
